@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h1 class="text-2xl font-bold mb-5">Profil Operator</h1>

<div class="max-w-xl rounded-xl border border-indigo-950/60 bg-slate-900/70 p-6">
    <div class="flex items-center gap-4">
        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-amber-400 text-2xl font-bold text-slate-900">
            {{ strtoupper(substr($username, 0, 1)) }}
        </div>
        <div>
            <p class="text-xl font-semibold text-cyan-300">{{ $username }}</p>
            <p class="text-sm text-slate-400">{{ $profile['peran'] }}</p>
        </div>
    </div>

    <dl class="mt-6 space-y-3 text-sm">
        <div class="flex justify-between border-b border-indigo-900/50 pb-2">
            <dt class="text-slate-400">Divisi</dt>
            <dd>{{ $profile['divisi'] }}</dd>
        </div>
        <div class="flex justify-between border-b border-indigo-900/50 pb-2">
            <dt class="text-slate-400">Observasi Ditangani</dt>
            <dd class="font-mono text-amber-300">{{ $profile['jumlah_observasi'] }}</dd>
        </div>
    </dl>
</div>
@endsection
