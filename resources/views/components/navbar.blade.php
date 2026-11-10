@props(['username'])

<header class="flex items-center justify-between px-4 md:px-8 py-3 border-b border-indigo-900/60 bg-slate-950/70">
    <div class="font-mono text-lg font-bold text-amber-300 tracking-wide">
        ✦ ORBITRA LAB
    </div>
    <div class="flex items-center gap-3 text-sm">
        <span class="text-slate-400">User:</span>
        <span class="font-semibold text-cyan-300">{{ $username }}</span>
        <a href="{{ route('login') }}"
           class="px-3 py-1 rounded border border-slate-600 hover:border-amber-300 hover:text-amber-300 transition">
            Keluar
        </a>
    </div>
</header>
