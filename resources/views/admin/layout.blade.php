<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Bijulicar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-56 bg-gray-900 flex flex-col fixed inset-y-0">

            <div class="px-5 py-5 border-b border-gray-700">
                <div class="text-white font-bold text-sm">Bijulicar</div>
                <div class="text-gray-400 text-xs font-mono mt-0.5">Admin Panel</div>
            </div>

            @php $admin = auth('admin')->user(); @endphp
            <div class="px-5 py-4 border-b border-gray-700">
                <div class="text-xs text-gray-400 mb-1">Logged in as</div>
                <div class="text-sm text-white font-medium truncate">{{ $admin->name }}</div>
                <span
                    class="inline-block mt-1 text-xs px-2 py-0.5 rounded-full font-medium
                @if ($admin->hasRole('superadmin')) bg-red-900 text-red-300
                @else bg-yellow-900 text-yellow-300 @endif">
                    {{ $admin->getRoleNames()->first() }}
                </span>
            </div>

            <nav class="flex-1 px-3 py-4 space-y-1">

                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm transition-colors
                      {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Dashboard
                </a>

                @can('manage users')
                    <a href="{{ route('admin.users') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm transition-colors
                      {{ request()->routeIs('admin.users*') ? 'bg-indigo-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Users
                    </a>
                    <a href="{{ route('admin.permissions.index') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm transition-colors
                      {{ request()->routeIs('admin.permissions*') ? 'bg-indigo-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Permissions
                    </a>
                    <a href="{{ route('admin.roles.index') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm transition-colors
                      {{ request()->routeIs('admin.roles*') ? 'bg-indigo-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Roles
                    </a>
                @endcan

                @can('manage admins')
                    <a href="{{ route('admin.admins.index') }}"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg text-sm transition-colors
                      {{ request()->routeIs('admin.admins*') ? 'bg-indigo-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        Admins
                        <span class="ml-auto text-xs bg-red-900 text-red-300 px-1.5 py-0.5 rounded">super</span>
                    </a>
                @endcan

            </nav>

            <div class="px-3 py-4 border-t border-gray-700">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-sm text-red-400 hover:bg-red-900/30 hover:text-red-300 transition-colors">
                        Logout
                    </button>
                </form>
            </div>

        </aside>

        <!-- Main -->
        <div class="flex-1 ml-56">
            <header class="bg-white border-b border-gray-200 px-8 py-4">
                <h1 class="text-lg font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
            </header>

            @if (session('success'))
                <div class="mx-8 mt-4 bg-green-50 border border-green-200 text-green-800 rounded-lg px-4 py-3 text-sm">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mx-8 mt-4 bg-red-50 border border-red-200 text-red-800 rounded-lg px-4 py-3 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <div class="p-8">@yield('content')</div>
        </div>

    </div>
</body>

</html>
