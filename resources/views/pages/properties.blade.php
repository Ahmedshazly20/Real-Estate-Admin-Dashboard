@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <section class="flex flex-col gap-4 rounded-xl border border-slate-200 bg-white p-5 shadow-sm md:flex-row md:items-center md:justify-between">
            <div>
                <h2 class="text-xl font-bold text-slate-950">Properties</h2>
                <p class="mt-1 text-sm text-slate-500">Browse, search, and filter listed properties.</p>
            </div>
            <div class="flex w-full flex-col gap-3 sm:flex-row md:w-auto">
                <input data-property-search type="search" placeholder="Search by property name..." class="h-11 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 text-sm font-medium outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-500/10 sm:w-72">
                <select data-property-filter class="h-11 rounded-xl border border-slate-200 bg-slate-50 px-4 text-sm font-bold text-slate-700 outline-none transition focus:border-emerald-500 focus:bg-white focus:ring-4 focus:ring-emerald-500/10">
                    <option>All</option>
                    <option>Available</option>
                    <option>Sold</option>
                    <option>Reserved</option>
                </select>
            </div>
        </section>

        <section data-property-grid class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($properties as $property)
                <article data-property-card data-name="{{ strtolower($property['name']) }}" data-status="{{ $property['status'] }}" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:shadow-xl">
                    <img src="{{ $property['image'] }}" alt="{{ $property['name'] }}" class="h-56 w-full object-cover">
                    <div class="space-y-4 p-5">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="text-lg font-black text-slate-950">{{ $property['name'] }}</h3>
                                <p class="mt-1 text-sm font-medium text-slate-500">{{ $property['type'] }}</p>
                            </div>
                            @include('pages.partials.status-badge', ['status' => $property['status']])
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-xl font-black text-slate-950">{{ $property['price'] }}</p>
                            <a href="{{ url('/properties/'.$property['id']) }}" class="inline-flex items-center justify-center rounded-xl bg-slate-950 px-4 py-2 text-sm font-bold text-white shadow-sm transition hover:bg-emerald-600">
                                View Details
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </section>
    </div>
@endsection
