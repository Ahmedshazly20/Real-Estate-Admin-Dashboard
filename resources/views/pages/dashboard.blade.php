@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <section class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
            @foreach ($stats as $stat)
                <article class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-xl">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-sm font-semibold text-slate-500">{{ $stat['title'] }}</p>
                            <p class="mt-2 text-3xl font-black text-slate-950">{{ $stat['value'] }}</p>
                        </div>
                        <div class="grid h-12 w-12 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                            @include('pages.partials.stat-icon', ['name' => $stat['icon']])
                        </div>
                    </div>
                </article>
            @endforeach
        </section>

        <section class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                <h2 class="text-lg font-bold text-slate-950">Latest Properties</h2>
                <a href="{{ url('/properties') }}" class="text-sm font-semibold text-emerald-600 transition hover:text-emerald-700">View all</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-500">Image</th>
                            <th class="px-5 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-500">Name</th>
                            <th class="px-5 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-500">Type</th>
                            <th class="px-5 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-500">Price</th>
                            <th class="px-5 py-3 text-left text-xs font-bold uppercase tracking-wider text-slate-500">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 bg-white">
                        @foreach ($latestProperties as $property)
                            <tr class="transition hover:bg-slate-50">
                                <td class="px-5 py-4">
                                    <img src="{{ $property['image'] }}" alt="{{ $property['name'] }}" class="h-14 w-20 rounded-lg object-cover">
                                </td>
                                <td class="whitespace-nowrap px-5 py-4 text-sm font-bold text-slate-900">{{ $property['name'] }}</td>
                                <td class="whitespace-nowrap px-5 py-4 text-sm text-slate-600">{{ $property['type'] }}</td>
                                <td class="whitespace-nowrap px-5 py-4 text-sm font-semibold text-slate-900">{{ $property['price'] }}</td>
                                <td class="whitespace-nowrap px-5 py-4">@include('pages.partials.status-badge', ['status' => $property['status']])</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
