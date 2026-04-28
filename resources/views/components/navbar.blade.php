<nav class="fixed top-0 w-full z-50 bg-[#f7f9fb]/80 backdrop-blur-md glass-nav">
    <div class="flex justify-between items-center w-full px-8 py-4 max-w-7xl mx-auto">
        <div class="text-2xl font-bold font-['Newsreader'] text-[#154231]">Everyday Money
            101</div>
        <div class="hidden md:flex items-center gap-8">
            <a class="text-[#154231] {{ request()->routeIs('blog.home') ? 'font-bold border-b-2' : '' }} border-[#154231] pb-1 font-['Newsreader'] tracking-tight"
                href="{{ route('blog.home') }}">Home</a>
            <a class="text-[#515f74] {{ request()->routeIs('blog.archive') ? 'font-bold border-b-2' : '' }} border-[#154231] pb-1 font-['Newsreader'] tracking-tight"
                href="{{ route('blog.archive') }}">Archive</a>
            <a class="text-[#515f74] {{ request()->routeIs('blog.about') ? 'font-bold border-b-2' : '' }} border-[#154231] pb-1 font-['Newsreader'] tracking-tight"
                href="{{ route('blog.about') }}">About</a>
        </div>
        <div class="flex items-center gap-4">
            <div class="relative hidden sm:block">
                <input
                    class="bg-surface-container-low border-none rounded-full px-4 py-1.5 text-sm focus:ring-2 mr-4 focus:ring-primary/20 w-48 md:w-64"
                    placeholder="Search wisdom..." type="text" />
                <span
                    class="material-symbols-outlined absolute right-3 top-1.5 text-on-surface-variant text-lg">search</span>
            </div>

            <button class="md:hidden text-primary">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>
</nav>
