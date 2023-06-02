<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="/" title="{{ $page->siteName }} home" class="-m-1.5 p-1.5">
            <span class="sr-only">{{ $page->siteName }}</span>
            <x-application-logomark class="w-auto h-8" alt="{{ $page->siteName }} logo" />
        </a>
    </div>
    {{-- <div class="flex lg:hidden">
        <button
            x-on:click="showingMobileMenu = true"
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div> --}}
    {{-- <div class="hidden lg:flex lg:gap-x-12">
        <x-navigation.desktop-link value="Portfolio" />
        <x-navigation.desktop-link value="Open Source" />
        <x-navigation.desktop-link value="Web Development" />
    </div> --}}
</nav>