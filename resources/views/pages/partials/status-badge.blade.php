@php
    $classes = [
        'Available' => 'bg-emerald-100 text-emerald-700 ring-emerald-600/20',
        'Sold' => 'bg-rose-100 text-rose-700 ring-rose-600/20',
        'Reserved' => 'bg-amber-100 text-amber-800 ring-amber-600/20',
    ][$status] ?? 'bg-slate-100 text-slate-700 ring-slate-600/20';
@endphp

<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-bold ring-1 ring-inset {{ $classes }}">
    {{ $status }}
</span>
