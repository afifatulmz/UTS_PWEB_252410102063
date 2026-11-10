@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="grid md:grid-cols-2 items-center gap-8 min-h-[80vh]">

  
    <div class="hidden md:flex justify-center">
        <img src="{{ asset('image/galaxy.png') }}"
             alt="Milkyway Galaxy"
             class="w-full max-w-md rounded-2xl">
    </div>

    <div class="w-full max-w-xl justify-self-center md:justify-self-start rounded-xl border border-indigo-950/60 bg-slate-900/70 px-12 py-14 shadow-xl">
        <h1 class="font-mono text-2xl font-bold text-amber-300 text-center">LAB ASTRONOMI ORBITRA</h1>
        <p class="text-center text-slate-400 text-sm mt-1 mb-6">Selamat datang kembali!</p>

        @if (session('error'))
            <div class="mb-4 rounded border border-red-500/50 bg-red-900/30 px-3 py-2 text-sm text-red-300">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm mb-1" for="username">Username</label>
                <input type="text" id="username" name="username"
                       class="w-full rounded bg-slate-950 border border-slate-700 px-3 py-2 focus:outline-none focus:border-cyan-400">
            </div>
            <div>
                <label class="block text-sm mb-1" for="password">Password</label>
                <input type="password" id="password" name="password"
                       class="w-full rounded bg-slate-950 border border-slate-700 px-3 py-2 focus:outline-none focus:border-cyan-400">
            </div>
            <button type="submit"
                    class="w-full rounded bg-amber-400 py-2 font-semibold text-slate-900 hover:bg-amber-300 transition">
                Masuk
            </button>
        </form>
    </div>

</div>
@endsection