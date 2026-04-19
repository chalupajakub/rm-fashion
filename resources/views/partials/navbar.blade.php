<header class="border-b border-default sticky top-0 z-40 bg-[var(--bg)]/90 backdrop-blur">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10">
        <div class="flex items-center justify-between h-16">
            {{-- Mobile Menu Icon --}}
            <button class="p-2 -ml-2 rounded-full hover:bg-secondary transition-colors" aria-label="Menu">
                <x-heroicon-m-bars-3-bottom-left class="w-6 h-6 text-black" />
            </button>

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="font-display text-2xl">Nextgen<span style="color:var(--accent)">.</span></a>

            {{-- Right Icons --}}
            <div class="flex items-center gap-1">
                <a href="#" class="hidden sm:inline-flex px-3 py-2 text-sm hover:bg-secondary rounded-full">About</a>
                <a href="#" class="hidden sm:inline-flex px-3 py-2 text-sm hover:bg-secondary rounded-full">FAQs</a>
                <button class="relative p-2 rounded-full hover:bg-secondary transition-colors ml-1" aria-label="Cart">
                    <x-heroicon-o-shopping-bag class="w-6 h-6 text-black" />
                    <span class="absolute -top-0.5 -right-0.5 h-4 w-4 rounded-full bg-fg text-bg text-[10px] font-medium flex items-center justify-center">2</span>
                </button>
            </div>
        </div>

        {{-- Sub-navigation --}}
        <div class="sub-nav flex items-center gap-2 sm:gap-6 py-3 overflow-hidden transition-all duration-300 max-h-40 opacity-100">
            <nav class="flex items-center gap-1 shrink-0">
                <a href="#" class="px-3 py-1.5 text-sm rounded-full bg-fg text-bg">Men</a>
                <a href="#" class="px-3 py-1.5 text-sm rounded-full hover:bg-secondary">Women</a>
                <a href="#" class="px-3 py-1.5 text-sm rounded-full hover:bg-secondary">Children</a>
                <a href="#" class="px-3 py-1.5 text-sm rounded-full hover:bg-secondary">Brands</a>
            </nav>

            {{-- Search Bar (Desktop) --}}
            <div class="flex-1 hidden md:flex items-center gap-2 max-w-md ml-auto">
                <div class="relative flex-1">
                    <x-heroicon-m-magnifying-glass class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-muted"/>
                    <input type="search" placeholder="Search products..." class="w-full h-9 pl-9 pr-3 text-sm rounded-full bg-secondary border-0 focus:ring-2 focus:ring-[var(--fg)]/10 outline-none"/>
                </div>
                <select class="h-9 px-3 text-sm rounded-full bg-secondary border-0 outline-none cursor-pointer">
                    <option>Categories</option>
                    <option>Hoodies</option>
                    <option>Tees</option>
                </select>
            </div>
        </div>
    </div>
</header>

<script>
    const subnav = document.querySelector(".sub-nav");

    let currentPos;

    document.addEventListener('scroll', () => {
        if (window.scrollY > 0) {
            subnav.classList.add('max-h-0', 'opacity-0', 'py-0');
            subnav.classList.remove('max-h-40', 'opacity-100', 'py-3');
        } else {
            subnav.classList.remove('max-h-0', 'opacity-0', 'py-0');
            subnav.classList.add('max-h-40', 'opacity-100', 'py-3');
        }
    });
</script>