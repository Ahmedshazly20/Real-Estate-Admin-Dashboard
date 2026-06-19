@php
    $items = [
        [
            'label' => 'Dashboard',
            'href' => url('/'),
            'active' => request()->is('/'),
            'icon' => 'M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6Zm9.75 0a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25Zm9.75 0a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z',
        ],
        [
            'label' => 'Properties',
            'href' => url('/properties'),
            'active' => request()->is('properties*'),
            'icon' => 'M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125V21m-9 0h10.5m-10.5 0H5.625A2.625 2.625 0 0 1 3 18.375v-7.5c0-.621.293-1.205.79-1.575l6.75-5.063a2.625 2.625 0 0 1 3.15 0l6.75 5.063c.497.37.79.954.79 1.575v7.5A2.625 2.625 0 0 1 18.375 21H15.75',
        ],
    ];
@endphp

<aside data-sidebar class="fixed inset-y-0 left-0 z-40 w-72 -translate-x-full border-r border-slate-800 bg-slate-950 px-4 py-5 text-white shadow-2xl transition-transform duration-300 lg:translate-x-0">
    <div class="flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <span class="grid h-11 w-11 place-items-center rounded-xl bg-emerald-500 text-lg font-black text-white shadow-lg shadow-emerald-500/25">RE</span>
            <span class="text-lg font-bold leading-tight">Real Estate Admin</span>
        </a>
        <button type="button" data-sidebar-close class="rounded-lg p-2 text-slate-300 hover:bg-white/10 lg:hidden" aria-label="Close sidebar">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <nav class="mt-10 space-y-2">
        @foreach ($items as $item)
            <a href="{{ $item['href'] }}" class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold transition duration-200 {{ $item['active'] ? 'bg-emerald-500 text-white shadow-lg shadow-emerald-500/20' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                <svg class="h-5 w-5 flex-none" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $item['icon'] }}" />
                </svg>
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>
</aside>
