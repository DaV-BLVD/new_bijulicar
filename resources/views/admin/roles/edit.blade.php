@extends('admin.layout')
@section('title', 'Edit Role')
@section('page-title', 'Edit Role')
@section('content')
    <div class="max-w-2xl space-y-6">

        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-800 rounded-lg px-4 py-3 text-sm">
                {{ session('success') }}</div>
        @endif

        <!-- Edit name -->
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100">
                <h3 class="font-semibold text-gray-900">Role Name</h3>
            </div>
            <form method="POST" action="{{ route('admin.roles.update', $role) }}" class="px-6 py-6">
                @csrf @method('PUT')
                <div class="flex gap-3">
                    <input type="text" name="name" value="{{ old('name', $role->name) }}" required
                        class="flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm font-mono focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit"
                        class="bg-indigo-600 text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-indigo-700">Save
                        Name</button>
                </div>
                @error('name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </form>
        </div>

        <!-- Edit permissions -->
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100">
                <h3 class="font-semibold text-gray-900">Permissions</h3>
                <p class="text-sm text-gray-500 mt-0.5">Check the permissions this role should have. Changes take effect
                    immediately.</p>
            </div>
            <form method="POST" action="{{ route('admin.roles.permissions.update', $role) }}" class="px-6 py-6">
                @csrf
                @if ($permissions->isEmpty())
                    <p class="text-sm text-gray-400 mb-4">No permissions exist yet. <a
                            href="{{ route('admin.permissions.create') }}" class="text-indigo-600 hover:underline">Create
                            permissions first.</a></p>
                @else
                    <div class="grid grid-cols-2 gap-2 mb-6">
                        @foreach ($permissions as $permission)
                            <label
                                class="flex items-center gap-3 p-3 border rounded-lg cursor-pointer transition-colors
                                  {{ in_array($permission->id, $rolePermissionIds) ? 'border-indigo-300 bg-indigo-50' : 'border-gray-200 hover:bg-gray-50' }}">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                    {{ in_array($permission->id, $rolePermissionIds) ? 'checked' : '' }}
                                    class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <span class="text-sm font-mono text-gray-700">{{ $permission->name }}</span>
                                @if (in_array($permission->id, $rolePermissionIds))
                                    <span class="ml-auto text-xs text-indigo-600">✓</span>
                                @endif
                            </label>
                        @endforeach
                    </div>
                @endif
                <div class="flex gap-3">
                    <button type="submit"
                        class="flex-1 bg-indigo-600 text-white py-2.5 rounded-lg text-sm font-medium hover:bg-indigo-700">Save
                        Permissions</button>
                    <a href="{{ route('admin.roles.index') }}"
                        class="flex-1 text-center border border-gray-300 text-gray-700 py-2.5 rounded-lg text-sm hover:bg-gray-50">Back
                        to Roles</a>
                </div>
            </form>
        </div>

    </div>
@endsection
