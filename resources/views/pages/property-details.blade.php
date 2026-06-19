@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ url('/properties') }}" class="inline-flex w-fit items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-bold text-slate-700 shadow-sm transition hover:bg-slate-50">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
                Back
            </a>
            <button disabled class="inline-flex w-fit cursor-not-allowed items-center gap-2 rounded-xl bg-slate-300 px-4 py-2 text-sm font-bold text-white">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                </svg>
                Edit
            </button>
        </div>

        <section class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <img src="{{ $property['image'] }}" alt="{{ $property['name'] }}" class="h-80 w-full object-cover lg:h-[28rem]">

            <div class="grid gap-4 p-5 md:grid-cols-3">
                @foreach ($property['gallery'] as $image)
                    <img src="{{ $image }}" alt="{{ $property['name'] }} gallery image" class="h-40 w-full rounded-xl object-cover shadow-sm">
                @endforeach
            </div>

            <div class="grid gap-8 border-t border-slate-200 p-6 lg:grid-cols-[1fr_22rem]">
                <div>
                    <div class="flex flex-wrap items-center gap-3">
                        <h2 class="text-2xl font-black text-slate-950 sm:text-3xl">{{ $property['name'] }}</h2>
                        @include('pages.partials.status-badge', ['status' => $property['status']])
                    </div>
                    <p class="mt-4 max-w-3xl text-base leading-7 text-slate-600">{{ $property['description'] }}</p>
                </div>

                <dl class="grid gap-4 rounded-xl bg-slate-50 p-5">
                    <div>
                        <dt class="text-xs font-bold uppercase tracking-wider text-slate-500">Property Type</dt>
                        <dd class="mt-1 text-lg font-black text-slate-950">{{ $property['type'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-bold uppercase tracking-wider text-slate-500">Property Price</dt>
                        <dd class="mt-1 text-lg font-black text-slate-950">{{ $property['price'] }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-bold uppercase tracking-wider text-slate-500">Property Status</dt>
                        <dd class="mt-2">@include('pages.partials.status-badge', ['status' => $property['status']])</dd>
                    </div>
                </dl>
            </div>
        </section>
    </div>
@endsection
