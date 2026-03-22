@extends('admin.layout')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    @php $admin = auth('admin')->user(); @endphp

    <div class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">
        <div class="flex items-start justify-between">
            <div>
                <h2 class="text-lg font-semibold text-gray-900">Welcome, {{ $admin->name }}</h2>
                <p class="text-sm text-gray-500 mt-0.5">
                    Logged in as
                    <span class="font-semibold {{ $admin->hasRole('superadmin') ? 'text-red-600' : 'text-yellow-600' }}">
                        {{ $admin->getRoleNames()->first() }}
                    </span>
                    via the <span class="font-mono text-xs bg-gray-100 px-1.5 py-0.5 rounded">admin</span> guard.
                </p>
            </div>
            <span
                class="text-xs font-medium px-3 py-1 rounded-full
            {{ $admin->hasRole('superadmin') ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700' }}">
                {{ $admin->hasRole('superadmin') ? 'Full Access' : 'Admin Access' }}
            </span>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white border border-gray-200 rounded-xl p-5">
            <div class="text-2xl font-bold text-gray-900">{{ $stats['total_users'] }}</div>
            <div class="text-sm text-gray-500 mt-0.5">Total Users</div>
        </div>
        <div class="bg-blue-50 border border-blue-100 rounded-xl p-5">
            <div class="text-2xl font-bold text-blue-700">{{ $stats['buyers'] }}</div>
            <div class="text-sm text-blue-600 mt-0.5">Buyers</div>
        </div>
        <div class="bg-green-50 border border-green-100 rounded-xl p-5">
            <div class="text-2xl font-bold text-green-700">{{ $stats['sellers'] }}</div>
            <div class="text-sm text-green-600 mt-0.5">Sellers</div>
        </div>
        <div class="bg-purple-50 border border-purple-100 rounded-xl p-5">
            <div class="text-2xl font-bold text-purple-700">{{ $stats['businesses'] }}</div>
            <div class="text-sm text-purple-600 mt-0.5">Businesses</div>
        </div>
    </div>

    <!-- Quick actions -->
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
        @can('manage users')
            <a href="{{ route('admin.users') }}"
                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition-shadow block">
                <p class="font-medium text-gray-900 mb-1">Manage Users</p>
                <p class="text-sm text-gray-500">View and update frontend user roles.</p>
            </a>
            <a href="{{ route('admin.permissions.index') }}"
                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition-shadow block">
                <p class="font-medium text-gray-900 mb-1">Permissions</p>
                <p class="text-sm text-gray-500">Create and manage what actions exist.</p>
            </a>
            <a href="{{ route('admin.roles.index') }}"
                class="bg-white border border-gray-200 rounded-xl p-5 hover:shadow-sm transition-shadow block">
                <p class="font-medium text-gray-900 mb-1">Roles</p>
                <p class="text-sm text-gray-500">Assign permissions to roles.</p>
            </a>
        @endcan

        @can('manage admins')
            <a href="{{ route('admin.admins.index') }}"
                class="bg-red-50 border border-red-100 rounded-xl p-5 hover:shadow-sm transition-shadow block">
                <p class="font-medium text-red-900 mb-1">Manage Admins</p>
                <p class="text-sm text-red-600">Add, edit, delete admin accounts.</p>
                <span class="inline-block mt-2 text-xs bg-red-100 text-red-700 px-2 py-0.5 rounded">Superadmin only</span>
            </a>
        @endcan
    </div>

    <!-- Permissions -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
        <h3 class="text-sm font-semibold text-gray-900 mb-3">Your permissions <span
                class="text-gray-400 font-normal">(guard: admin)</span></h3>
        <div class="flex flex-wrap gap-2">
            @foreach ($admin->getAllPermissions() as $perm)
                <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full font-mono">{{ $perm->name }}</span>
            @endforeach
        </div>
    </div>

@endsection
