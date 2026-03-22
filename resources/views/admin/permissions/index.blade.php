 @extends('admin.layout')
 @section('title', 'Permissions') @section('page-title', 'Manage Permissions') @section('content') <div
     class="flex justify-between items-center mb-4">
     <p class="text-sm text-gray-500">Web guard permissions — what actions frontend users can perform.</p>
     <a href="{{ route('admin.permissions.create') }}"
         class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-indigo-700">+ New
         Permission</a>
 </div>
 <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">
     <div class="px-6 py-4 border-b border-gray-100">
         <h3 class="font-semibold text-gray-900">Web Guard Permissions</h3>
         <p class="text-xs text-gray-400 font-mono mt-0.5">guard_name = web</p>
     </div>
     <table class="w-full text-sm">
         <thead class="bg-gray-50 border-b border-gray-100">
             <tr>
                 <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                     Permission</th>
                 <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Used by
                     roles</th>
                 <th class="text-left px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                 </th>
             </tr>
         </thead>
         <tbody class="divide-y divide-gray-100">
             @forelse($permissions as $permission)
                 <tr class="hover:bg-gray-50">
                     <td class="px-6 py-4 font-mono text-sm text-gray-800">{{ $permission->name }}</td>
                     <td class="px-6 py-4">
                         @if ($permission->roles_count > 0)
                             <span
                                 class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">{{ $permission->roles_count }}
                                 {{ Str::plural('role', $permission->roles_count) }}</span>
                         @else
                             <span class="text-xs text-gray-400">not assigned</span>
                         @endif
                     </td>
                     <td class="px-6 py-4">
                         <div class="flex items-center gap-4">
                             <a href="{{ route('admin.permissions.edit', $permission) }}"
                                 class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Edit</a>
                             <form method="POST" action="{{ route('admin.permissions.destroy', $permission) }}"
                                 onsubmit="return confirm('Delete this permission?')">
                                 @csrf @method('DELETE')
                                 <button type="submit" class="text-sm text-red-500 hover:text-red-700">Delete</button>
                             </form>
                         </div>
                     </td>
                 </tr>
             @empty
                 <tr>
                     <td colspan="3" class="px-6 py-8 text-center text-gray-400 text-sm">No permissions yet.</td>
                 </tr>
             @endforelse
         </tbody>
     </table>
 </div>
@endsection
