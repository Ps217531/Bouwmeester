<nav x-data="{ open: false }" class="bg-white border-r border-gray-100 h-screen fixed left-0 top-0 overflow-auto">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col h-full">
            <div class="flex flex-col">
                <!-- Logo -->
                <div class="shrink-0 flex items-center mb-4">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="space-y-4 flex flex-col">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.index')">
                        {{ __('Articles') }}
                    </x-nav-link>

                    <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                        {{ __('Categories') }}
                    </x-nav-link> --}}
                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="mt-auto">
{{-- logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>