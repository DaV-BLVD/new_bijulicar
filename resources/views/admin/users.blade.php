@extends('admin.layout')
@section('title', 'Users')
@section('page-title', 'Manage Users')

@section('content')

    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
            <div>
                <h3 class="font-semibold text-gray-900">Frontend Users</h3>
                <p class="text-xs text-gray-400 font-mono mt-0.5">guard: web — users table</p>
            </div>
            <span class="text-sm text-gray-400">{{ $users->total() }} users</span>
        </div>

        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Joined</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Change Role
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium text-gray-900">{{ $user->name }}</div>
                            <div class="text-xs text-gray-400">{{ $user->email }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @php $role = $user->getRoleNames()->first() @endphp
                            @if ($role)
                                <span
                                    class="text-xs font-medium px-2.5 py-1 rounded-full
                            @if ($role === 'buyer') bg-blue-100 text-blue-700
                            @elseif($role === 'seller')   bg-green-100 text-green-700
                            @elseif($role === 'business') bg-purple-100 text-purple-700
                            @else bg-gray-100 text-gray-600 @endif">
                                    {{ $role }}
                                </span>
                            @else
                                <span class="text-xs text-gray-400">no role</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs">{{ $user->created_at->diffForHumans() }}</td>
                        <td class="px-6 py-4">
                            <form method="POST" action="{{ route('admin.users.updateRole', $user) }}"
                                class="flex items-center gap-2">
                                @csrf @method('PATCH')
                                <select name="role"
                                    class="text-xs border border-gray-200 rounded-lg px-2 py-1 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                                    <option value="buyer" {{ $role === 'buyer' ? 'selected' : '' }}>buyer</option>
                                    <option value="seller" {{ $role === 'seller' ? 'selected' : '' }}>seller</option>
                                    <option value="business" {{ $role === 'business' ? 'selected' : '' }}>business</option>
                                </select>
                                <button type="submit"
                                    class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">Update</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-400 text-sm">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        @if ($users->hasPages())
            <div class="px-6 py-4 border-t border-gray-100">{{ $users->links() }}</div>
        @endif
    </div>

@endsection
