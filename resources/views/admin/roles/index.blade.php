@extends('admin.layout')
@section('title', 'Roles')
@section('page-title', 'Manage Roles')
@section('content')
    <div class="flex justify-between items-center mb-4">
        <p class="text-sm text-gray-500">Roles bundle permissions together and are assigned to users.</p>
        <a href="{{ route('admin.roles.create') }}"
            class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700">+ New Role</a>
    </div>
    <div class="space-y-4">
        @forelse($roles as $role)
            <div class="bg-white border border-gray-200 rounded-2xl p-6">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="font-semibold text-gray-900 text-lg font-mono">{{ $role->name }}</span>
                            <span
                                class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">{{ $role->users_count }}
                                {{ Str::plural('user', $role->users_count) }}</span>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @forelse($role->permissions as $perm)
                                <span
                                    class="text-xs bg-indigo-50 text-indigo-700 border border-indigo-100 px-3 py-1 rounded-full font-mono">{{ $perm->name }}</span>
                            @empty
                                <span class="text-xs text-gray-400">No permissions assigned</span>
                            @endforelse
                        </div>
                    </div>
                    <div class="flex items-center gap-3 ml-6 flex-shrink-0">
                        <a href="{{ route('admin.roles.edit', $role) }}"
                            class="text-sm bg-indigo-50 text-indigo-700 border border-indigo-200 px-3 py-1.5 rounded-lg hover:bg-indigo-100 font-medium">Edit
                            Permissions</a>
                        @if (!in_array($role->name, ['buyer', 'seller', 'business']))
                            <form method="POST" action="{{ route('admin.roles.destroy', $role) }}"
                                onsubmit="return confirm('Delete role?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-sm text-red-500 hover:text-red-700">Delete</button>
                            </form>
                        @else
                            <span class="text-xs text-gray-400 px-2">core role</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-white border border-gray-200 rounded-2xl p-8 text-center text-gray-400 text-sm">No roles yet.
            </div>
        @endforelse
    </div>
@endsection
