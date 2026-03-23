@extends('admin.layout')
@section('title', 'Dashboard')
@section('page-title', 'Overview')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @foreach ([['label' => 'Total Users', 'value' => $stats['total_users'], 'color' => 'blue'], ['label' => 'Active Buyers', 'value' => $stats['buyers'], 'color' => 'emerald'], ['label' => 'Verified Sellers', 'value' => $stats['sellers'], 'color' => 'amber'], ['label' => 'Businesses', 'value' => $stats['businesses'], 'color' => 'indigo']] as $stat)
            <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">{{ $stat['label'] }}</p>
                <h3 class="text-3xl font-black text-slate-900">{{ number_format($stat['value']) }}</h3>
                <div class="mt-4 h-1 w-full bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-{{ $stat['color'] }}-500 w-2/3"></div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm">
        <div class="px-6 py-4 border-b border-slate-100 flex justify-between items-center">
            <h3 class="font-bold text-slate-800 text-sm">Session Permissions</h3>
            <span
                class="text-[10px] bg-slate-100 text-slate-500 px-2 py-0.5 rounded uppercase font-bold tracking-tighter">Guard:
                admin</span>
        </div>
        <div class="p-6">
            <div class="flex flex-wrap gap-2">
                @foreach (auth('admin')->user()->getAllPermissions() as $perm)
                    <span class="px-3 py-1 bg-slate-50 border border-slate-200 text-slate-600 rounded-md text-xs font-mono">
                        {{ $perm->name }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
