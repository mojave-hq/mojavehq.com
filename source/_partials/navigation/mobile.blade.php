<div
    x-show="showingMobileMenu"
    x-cloak
    role="dialog"
    aria-modal="true"
    class="lg:hidden">
    <div
        x-show="showingMobileMenu"
        x-cloak
        class="fixed inset-0 z-50"></div>

    <div class="fixed inset-y-0 right-0 z-50 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="/" title="{{ $page->siteName }} home" class="-m-1.5 p-1.5">
                <span class="sr-only">{{ $page->siteName }}</span>
                <x-application-logomark class="w-auto h-8" alt="{{ $page->siteName }} logo" />
            </a>
            <button
                x-on:click="showingMobileMenu = false"
                type="button"
                class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flow-root mt-6">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="py-6 space-y-2">
                    <x-navigation.mobile-link value="Portfolio" />
                    <x-navigation.mobile-link value="Open Source" />
                    <x-navigation.mobile-link value="Web Development" />
                </div>
            </div>
        </div>
    </div>
</div>