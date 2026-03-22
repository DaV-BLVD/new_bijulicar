<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Buyer Dashboard
            </h2>
            <span class="text-xs font-mono bg-blue-100 text-blue-700 px-2 py-1 rounded">
                role: buyer · guard: web
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-900 font-medium">Welcome back, {{ auth()->user()->name }}!</p>
                <p class="text-gray-500 text-sm mt-1">Browse vehicles, manage your purchases, and track your orders.</p>
            </div>

            <!-- Permissions panel — shows live permissions from DB -->
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-5">
                <p class="text-sm font-semibold text-blue-900 mb-3">Your current permissions:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach (auth()->user()->getAllPermissions() as $perm)
                        <span
                            class="text-xs bg-white border border-blue-200 text-blue-700 px-3 py-1 rounded-full font-mono">
                            {{ $perm->name }}
                        </span>
                    @endforeach
                </div>
                <p class="text-xs text-blue-500 mt-2">
                    These are loaded live from the database. An admin can change them.
                </p>
            </div>

            <!-- Feature cards — shown/hidden based on actual permissions -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                @can('browse listings')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Browse Vehicles</h3>
                        <p class="text-sm text-gray-500 mb-3">Search the marketplace for your next vehicle.</p>
                        <a href="{{ route('marketplace') }}" class="text-sm text-blue-600 hover:underline font-medium">
                            Go to marketplace →
                        </a>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: browse listings ✓</div>
                    </div>
                @endcan

                @can('purchase vehicle')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">My Purchases</h3>
                        <p class="text-sm text-gray-500 mb-3">View and manage your vehicle purchases.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: purchase vehicle ✓</div>
                    </div>
                @endcan

                @can('manage own orders')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">My Orders</h3>
                        <p class="text-sm text-gray-500 mb-3">Track the status of your orders.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: manage own orders ✓</div>
                    </div>
                @endcan

                @can('write reviews')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Write Reviews</h3>
                        <p class="text-sm text-gray-500 mb-3">Rate sellers and leave feedback.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: write reviews ✓</div>
                    </div>
                @endcan

                @cannot('list vehicles')
                    <div class="bg-gray-50 border border-dashed border-gray-200 rounded-lg p-6">
                        <h3 class="font-semibold text-gray-400 mb-1">List a Vehicle</h3>
                        <p class="text-sm text-gray-400 mb-3">Requires Seller or Business role.</p>
                        <div class="text-xs font-mono text-red-400">permission: list vehicles ✗</div>
                    </div>
                @endcannot

            </div>

        </div>
    </div>
</x-app-layout>
