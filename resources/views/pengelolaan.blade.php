@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

<h1 class="text-2xl font-bold">Pengelolaan Inventaris</h1>
<p class="text-slate-400 mt-1 mb-5">Daftar alat observasi laboratorium.</p>

<div class="overflow-x-auto rounded-xl border border-indigo-950/60">
    <table class="w-full text-sm text-left">
        <thead class="bg-indigo-950 text-white-300 uppercase text-xs">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">id</th>
                <th class="px-4 py-3">Nama Alat</th>
                <th class="px-4 py-3">Kategori</th>
                <th class="px-4 py-3">Lokasi</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Kondisi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-indigo-900/50 bg-slate-900/60">
            @foreach ($inventaris as $alat)
                <tr class="hover:bg-indigo-950/50">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-mono text-amber-300">{{ $alat['id'] }}</td>
                    <td class="px-4 py-3 font-semibold">{{ $alat['nama'] }}</td>
                    <td class="px-4 py-3">{{ $alat['kategori'] }}</td>
                    <td class="px-4 py-3">{{ $alat['lokasi'] }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-flex items-center gap-1.5 px-2 py-1 rounded-full {{ $warna[$alat['status']] ?? 'text-slate-300' }}">
                        <span class="h-2 w-2 rounded-full bg-current"></span>
                            {{ $alat['status'] }}
                        </span>
                    </td>
                        {{ $alat['status'] }}
                        </span>
                    </td>
                    <td class="px-4 py-3">{{ $alat['kondisi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection