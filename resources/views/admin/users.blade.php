@extends('admin.layout')
@section('title', 'Users')
@section('page-title', 'Manage Users')

@section('content')
    @can('manage users')
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                <div>
                    <h3 class="text-base font-bold text-gray-900">Frontend User Directory</h3>
                    <p class="text-[10px] text-gray-500 font-mono uppercase tracking-widest mt-0.5">Source: Users Table (Guard:
                        Web)</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-2 py-1 bg-white border border-gray-200 rounded-md text-xs font-bold text-gray-600">
                        {{ number_format($users->total()) }} Total
                    </span>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-100">
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-widest">User Profile</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-widest">Current Status
                            </th>
                            <th class="px-6 py-4 text-[10px] font-bold text-gray-400 uppercase tracking-widest">Management
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse($users as $user)
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-indigo-50 border border-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-xs">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="text-sm font-bold text-gray-900">{{ $user->name }}</div>
                                            <div class="text-xs text-gray-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @php $role = $user->getRoleNames()->first() @endphp
                                    <div class="flex flex-col gap-1">
                                        @if ($role)
                                            <span
                                                class="inline-flex items-center w-fit px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider
                                                {{ $role === 'buyer' ? 'bg-blue-50 text-blue-600 border border-blue-100' : '' }}
                                                {{ $role === 'seller' ? 'bg-emerald-50 text-emerald-600 border border-emerald-100' : '' }}
                                                {{ $role === 'business' ? 'bg-purple-50 text-purple-600 border border-purple-100' : '' }}">
                                                {{ $role }}
                                            </span>
                                        @else
                                            <span class="text-[10px] font-medium text-gray-400 italic">No role assigned</span>
                                        @endif
                                        <span class="text-[10px] text-gray-400">Joined
                                            {{ $user->created_at->format('M d, Y') }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        <form method="POST" action="{{ route('admin.users.updateRole', $user) }}"
                                            class="flex items-center gap-2">
                                            @csrf
                                            @method('PATCH')
                                            <select name="role"
                                                class="text-xs bg-gray-50 border border-gray-200 rounded-md px-2 py-1.5 focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                                                <option value="buyer" {{ $role === 'buyer' ? 'selected' : '' }}>Buyer</option>
                                                <option value="seller" {{ $role === 'seller' ? 'selected' : '' }}>Seller
                                                </option>
                                                <option value="business" {{ $role === 'business' ? 'selected' : '' }}>Business
                                                </option>
                                            </select>
                                            <button type="submit"
                                                class="p-1.5 text-indigo-600 hover:bg-indigo-50 rounded-md transition-colors"
                                                title="Save Role">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            </button>
                                        </form>

                                        <div class="h-4 w-px bg-gray-200"></div>

                                        <form method="POST" action="{{ route('admin.users.destroy', $user) }}"
                                            onsubmit="return confirm('Permanently delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-all">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-12 text-center">
                                    <div class="text-gray-400 text-sm font-medium">No users found in the database.</div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($users->hasPages())
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/30">
                    {{ $users->links() }}
                </div>
            @endif
        </div>
    @endcan
    {{-- @else
        <div class="bg-red-50 border border-red-100 text-red-700 p-6 rounded-2xl text-center">
            <p class="font-bold">Access Denied</p>
            <p class="text-sm">You do not have the required permissions to manage users.</p>
        </div>
    @endif --}}
@endsection
