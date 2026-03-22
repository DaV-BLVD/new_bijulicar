<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Seller Dashboard
            </h2>
            <span class="text-xs font-mono bg-green-100 text-green-700 px-2 py-1 rounded">
                role: seller · guard: web
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-900 font-medium">Welcome back, {{ auth()->user()->name }}!</p>
                <p class="text-gray-500 text-sm mt-1">Manage your listings, track performance, and grow your sales.</p>
            </div>

            <div class="bg-green-50 border border-green-100 rounded-lg p-5">
                <p class="text-sm font-semibold text-green-900 mb-3">Your current permissions:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach (auth()->user()->getAllPermissions() as $perm)
                        <span
                            class="text-xs bg-white border border-green-200 text-green-700 px-3 py-1 rounded-full font-mono">
                            {{ $perm->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                @can('list vehicles')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">List a Vehicle</h3>
                        <p class="text-sm text-gray-500 mb-3">Add a new vehicle to the marketplace.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: list vehicles ✓</div>
                    </div>
                @endcan

                @can('manage own listings')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">My Listings</h3>
                        <p class="text-sm text-gray-500 mb-3">Edit prices, photos, and descriptions.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: manage own listings ✓</div>
                    </div>
                @endcan

                @can('view seller analytics')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Analytics</h3>
                        <p class="text-sm text-gray-500 mb-3">Views, inquiries, and sales performance.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: view seller analytics ✓</div>
                    </div>
                @endcan

                @can('browse listings')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Browse Marketplace</h3>
                        <p class="text-sm text-gray-500 mb-3">View the marketplace as a buyer would.</p>
                        <a href="{{ route('marketplace') }}" class="text-sm text-green-600 hover:underline font-medium">
                            Go to marketplace →
                        </a>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: browse listings ✓ (shared)</div>
                    </div>
                @endcan

                @cannot('purchase vehicle')
                    <div class="bg-gray-50 border border-dashed border-gray-200 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-400 mb-1">Purchase Vehicle</h3>
                        <p class="text-sm text-gray-400 mb-3">Only buyers can purchase vehicles.</p>
                        <div class="text-xs font-mono text-red-400">permission: purchase vehicle ✗</div>
                    </div>
                @endcannot

            </div>
        </div>
    </div>
</x-app-layout>
