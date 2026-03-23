<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    protected $fillable = [
        'seller_id',
        'make',
        'model',
        'year',
        'variant',
        'drivetrain',
        'mileage',
        'range_km',
        'battery_kwh',
        'color',
        'condition',
        'price',
        'price_negotiable',
        'location',
        'description',
        'primary_image',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'price_negotiable' => 'boolean',
            'price'            => 'integer',
            'mileage'          => 'integer',
            'range_km'         => 'integer',
            'battery_kwh'      => 'integer',
        ];
    }

    // ── Relationships ─────────────────────────────────────────────────

    /** The seller (or business) who listed this car */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /** All orders placed for this car */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /** All reviews left for this car */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // ── Helpers ───────────────────────────────────────────────────────

    /** e.g. "NRs 5,500,000" */
    public function formattedPrice(): string
    {
        return 'NRs ' . number_format($this->price);
    }

    /** e.g. "2024 Tesla Model 3 Long Range" */
    public function displayName(): string
    {
        return "{$this->year} {$this->make} {$this->model}"
            . ($this->variant ? " {$this->variant}" : '');
    }

    public function isAvailable(): bool
    {
        return $this->status === 'available';
    }
}