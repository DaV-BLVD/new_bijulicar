<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Business Dashboard
            </h2>
            <span class="text-xs font-mono bg-purple-100 text-purple-700 px-2 py-1 rounded">
                role: business · guard: web
            </span>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-900 font-medium">Welcome back, {{ auth()->user()->name }}!</p>
                <p class="text-gray-500 text-sm mt-1">Manage bulk operations, advertising campaigns, and business
                    analytics.</p>
            </div>

            <div class="bg-purple-50 border border-purple-100 rounded-lg p-5">
                <p class="text-sm font-semibold text-purple-900 mb-3">Your current permissions:</p>
                <div class="flex flex-wrap gap-2">
                    @foreach (auth()->user()->getAllPermissions() as $perm)
                        <span
                            class="text-xs bg-white border border-purple-200 text-purple-700 px-3 py-1 rounded-full font-mono">
                            {{ $perm->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                @can('list vehicles')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">List Vehicles</h3>
                        <p class="text-sm text-gray-500 mb-3">Add vehicles to the marketplace.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: list vehicles ✓</div>
                    </div>
                @endcan

                @can('create advertisements')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Advertisements</h3>
                        <p class="text-sm text-gray-500 mb-3">Create and manage promotional campaigns.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: create advertisements ✓</div>
                    </div>
                @endcan

                @can('bulk operations')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Bulk Operations</h3>
                        <p class="text-sm text-gray-500 mb-3">Import/export inventory at scale.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: bulk operations ✓</div>
                    </div>
                @endcan

                @can('view business analytics')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Business Analytics</h3>
                        <p class="text-sm text-gray-500 mb-3">Advanced reporting and market insights.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: view business analytics ✓</div>
                    </div>
                @endcan

                @can('view seller analytics')
                    <div class="bg-white shadow-sm rounded-lg p-6">
                        <h3 class="font-semibold text-gray-900 mb-1">Seller Analytics</h3>
                        <p class="text-sm text-gray-500 mb-3">Listing performance and market trends.</p>
                        <div class="mt-3 text-xs font-mono text-green-600">permission: view seller analytics ✓ (shared)
                        </div>
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
