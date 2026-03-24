<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerCarController extends Controller
{
    /**
     * Show all listings by this seller.
     */
    public function index()
    {
        $cars = Auth::user()
            ->listedCars()
            ->withCount('orders')
            ->with('primaryImage')
            ->latest()
            ->paginate(10);

        return view('dashboard.seller.cars.index', compact('cars'));
    }

    /**
     * Show the create listing form.
     */
    public function create()
    {
        return view('dashboard.seller.cars.create');
    }

    /**
     * Save a new listing.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand'             => ['required', 'string', 'max:100'],
            'model'            => ['required', 'string', 'max:100'],
            'year'             => ['required', 'integer', 'min:1990', 'max:' . (date('Y') + 1)],
            'variant'          => ['nullable', 'string', 'max:100'],
            'drivetrain'       => ['required', 'in:ev,hybrid,petrol,diesel'],
            'mileage'          => ['required', 'integer', 'min:0'],
            'range_km'         => ['nullable', 'integer', 'min:0'],
            'battery_kwh'      => ['nullable', 'integer', 'min:0'],
            'color'            => ['nullable', 'string', 'max:50'],
            'condition'        => ['required', 'in:new,used,certified'],
            'price'            => ['required', 'integer', 'min:1'],
            'price_negotiable' => ['boolean'],
            'location'         => ['required', 'string', 'max:100'],
            'description'      => ['nullable', 'string', 'max:2000'],
            'images'           => ['nullable', 'array', 'max:8'],
            'images.*'         => ['image', 'mimes:jpg,jpeg,png,webp', 'max:3072'], // 3MB per image
        ]);

        // Create the car listing
        $car = Car::create([
            'seller_id'        => Auth::id(),
            'brand'             => $request->brand,
            'model'            => $request->model,
            'year'             => $request->year,
            'variant'          => $request->variant,
            'drivetrain'       => $request->drivetrain,
            'mileage'          => $request->mileage,
            'range_km'         => $request->range_km,
            'battery_kwh'      => $request->battery_kwh,
            'color'            => $request->color,
            'condition'        => $request->condition,
            'price'            => $request->price,
            'price_negotiable' => $request->boolean('price_negotiable'),
            'location'         => $request->location,
            'description'      => $request->description,
            'status'           => 'available',
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $file) {
                $path = $file->store('car-images', 'public');

                $image = CarImage::create([
                    'car_id'     => $car->id,
                    'path'       => $path,
                    'alt'        => $car->displayName(),
                    'sort_order' => $index,
                    'is_primary' => $index === 0, // first image is the cover
                ]);

                // Sync primary image path to cars table
                if ($index === 0) {
                    $car->update(['primary_image' => $path]);
                }
            }
        }

        return redirect()
            ->route('seller.cars.index')
            ->with('success', "Listing for {$car->displayName()} created successfully.");
    }

    /**
     * Show the edit form for a listing.
     */
    public function edit(Car $car)
    {
        // Make sure this car belongs to the logged-in seller
        abort_if($car->seller_id !== Auth::id(), 403);

        $car->load('images');

        return view('dashboard.seller.cars.edit', compact('car'));
    }

    /**
     * Update an existing listing.
     */
    public function update(Request $request, Car $car)
    {
        abort_if($car->seller_id !== Auth::id(), 403);

        $request->validate([
            'brand'             => ['required', 'string', 'max:100'],
            'model'            => ['required', 'string', 'max:100'],
            'year'             => ['required', 'integer', 'min:1990', 'max:' . (date('Y') + 1)],
            'variant'          => ['nullable', 'string', 'max:100'],
            'drivetrain'       => ['required', 'in:ev,hybrid,petrol,diesel'],
            'mileage'          => ['required', 'integer', 'min:0'],
            'range_km'         => ['nullable', 'integer', 'min:0'],
            'battery_kwh'      => ['nullable', 'integer', 'min:0'],
            'color'            => ['nullable', 'string', 'max:50'],
            'condition'        => ['required', 'in:new,used,certified'],
            'price'            => ['required', 'integer', 'min:1'],
            'price_negotiable' => ['boolean'],
            'location'         => ['required', 'string', 'max:100'],
            'description'      => ['nullable', 'string', 'max:2000'],
            'status'           => ['required', 'in:available,reserved,inactive'],
            'new_images'       => ['nullable', 'array', 'max:8'],
            'new_images.*'     => ['image', 'mimes:jpg,jpeg,png,webp', 'max:3072'],
            'remove_images'    => ['nullable', 'array'],
            'remove_images.*'  => ['exists:car_images,id'],
        ]);

        $car->update([
            'brand'             => $request->brand,
            'model'            => $request->model,
            'year'             => $request->year,
            'variant'          => $request->variant,
            'drivetrain'       => $request->drivetrain,
            'mileage'          => $request->mileage,
            'range_km'         => $request->range_km,
            'battery_kwh'      => $request->battery_kwh,
            'color'            => $request->color,
            'condition'        => $request->condition,
            'price'            => $request->price,
            'price_negotiable' => $request->boolean('price_negotiable'),
            'location'         => $request->location,
            'description'      => $request->description,
            'status'           => $request->status,
        ]);

        // Remove selected images
        if ($request->filled('remove_images')) {
            $car->images()
                ->whereIn('id', $request->remove_images)
                ->each(fn($img) => $img->delete()); // triggers Storage::delete via booted()
        }

        // Upload new images
        if ($request->hasFile('new_images')) {
            $currentMax = $car->images()->max('sort_order') ?? -1;

            foreach ($request->file('new_images') as $index => $file) {
                $path = $file->store('car-images', 'public');

                CarImage::create([
                    'car_id'     => $car->id,
                    'path'       => $path,
                    'alt'        => $car->displayName(),
                    'sort_order' => $currentMax + $index + 1,
                    'is_primary' => false,
                ]);
            }
        }

        // Re-sync primary image — always use the first remaining image
        $firstImage = $car->images()->orderBy('sort_order')->first();
        $car->update([
            'primary_image' => $firstImage?->path,
            'is_primary'    => false, // reset old
        ]);
        if ($firstImage) {
            $firstImage->update(['is_primary' => true]);
        }

        return redirect()
            ->route('seller.cars.index')
            ->with('success', "Listing updated successfully.");
    }

    /**
     * Delete a listing and all its images.
     */
    public function destroy(Car $car)
    {
        abort_if($car->seller_id !== Auth::id(), 403);

        // Block deletion if car has active orders
        $hasActiveOrders = $car->orders()
            ->whereIn('status', ['pending', 'confirmed'])
            ->exists();

        abort_if($hasActiveOrders, 422, 'Cannot delete a listing with active orders. Cancel the orders first.');

        $name = $car->displayName();

        // Images are deleted automatically via CarImage::booted() deleting hook
        $car->images->each(fn($img) => $img->delete());
        $car->delete();

        return redirect()
            ->route('seller.cars.index')
            ->with('success', "{$name} listing deleted.");
    }
}