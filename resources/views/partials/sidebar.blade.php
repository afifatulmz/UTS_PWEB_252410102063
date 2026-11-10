<aside class="md:w-56 border-b md:border-b-0 md:border-r border-indigo-900/60 bg-slate-950/50 p-3">
    <nav class="flex md:flex-col gap-2 overflow-x-auto text-sm">
        <a href="{{ route('dashboard', ['username' => $username]) }}"
           class="px-4 py-2 rounded whitespace-nowrap hover:bg-indigo-900/50 hover:text-cyan-300 transition">
            🛰️ Dashboard
        </a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
           class="px-4 py-2 rounded whitespace-nowrap hover:bg-indigo-900/50 hover:text-cyan-300 transition">
            🔭 Pengelolaan
        </a>
        <a href="{{ route('profile', ['username' => $username]) }}"
           class="px-4 py-2 rounded whitespace-nowrap hover:bg-indigo-900/50 hover:text-cyan-300 transition">
            👤 Profile
        </a>
    </nav>
</aside>