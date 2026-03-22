@extends('admin.layout')
@section('title', 'Manage Admins')
@section('page-title', 'Manage Admins')
@section('content')
    <div class="bg-amber-50 border border-amber-200 rounded-xl px-5 py-3 mb-6 flex items-center gap-3">
        <span class="text-amber-600 text-sm">!</span>
        <p class="text-sm text-amber-800"><strong>Superadmin only.</strong> Changes here affect who can access the admin
            panel.</p>
    </div>
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.admins.create') }}"
            class="bg-gray-900 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-700">+ New Admin</a>
    </div>
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100">
            <h3 class="font-semibold text-gray-900">Admin Accounts</h3>
            <p class="text-xs font-mono text-gray-400 mt-0.5">guard: admin — admins table</p>
        </div>
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Admin</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                    <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($admins as $adm)
                    <tr class="hover:bg-gray-50 {{ $adm->id === $currentAdmin->id ? 'bg-yellow-50' : '' }}">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-gray-900">{{ $adm->name }}</span>
                                @if ($adm->id === $currentAdmin->id)
                                    <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded-full">you</span>
                                @endif
                            </div>
                            <div class="text-xs text-gray-400 mt-0.5">{{ $adm->email }}</div>
                        </td>
                        <td class="px-6 py-4">
                            @php $role = $adm->getRoleNames()->first() @endphp
                            <span
                                class="text-xs font-medium px-2.5 py-1 rounded-full {{ $role === 'superadmin' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700' }}">{{ $role }}</span>
                        </td>
                        <td class="px-6 py-4 text-gray-500 text-xs">{{ $adm->created_at->diffForHumans() }}</td>
                        <td class="px-6 py-4">
                            @if ($adm->id !== $currentAdmin->id)
                                <div class="flex items-center gap-3">
                                    <a href="{{ route('admin.admins.edit', $adm) }}"
                                        class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Edit</a>
                                    <form method="POST" action="{{ route('admin.admins.destroy', $adm) }}"
                                        onsubmit="return confirm('Delete admin {{ $adm->name }}?')">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="text-sm text-red-500 hover:text-red-700">Delete</button>
                                    </form>
                                </div>
                            @else
                                <span class="text-xs text-gray-400">cannot modify yourself</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
