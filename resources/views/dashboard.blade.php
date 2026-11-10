@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl md:text-3xl font-bold">
    Halo, <span class="text-cyan-300">{{ $username }}</span> 
</h1>
<p class="text-slate-400 mt-1">Hari ini bagus untuk observasi. Berikut ringkasan laboratorium.</p>

<div class="mt-6 grid gap-4 sm:grid-cols-2 max-w-3xl">
    <div class="rounded-xl border border-indigo-950/60 bg-slate-900/70 p-6">
        <p class="text-sm text-slate-400">Total Alat Terdaftar</p>
        <p class="mt-2 font-mono text-5xl font-bold text-amber-300">{{ $total }}</p>
    </div>
    <a href="{{ route('pengelolaan', ['username' => $username]) }}"
       class="rounded-xl border border-indigo-950/60 bg-slate-900/70 p-6 hover:border-cyan-400 transition">
        <p class="text-sm text-slate-400">Lihat Inventaris</p>
        <p class="mt-2 text-xl font-semibold text-cyan-300">Buka halaman pengelolaan →</p>
    </a>
</div>
@endsection