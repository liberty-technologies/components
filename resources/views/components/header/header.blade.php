@props(['logo', 'route'])

<nav
    @class([
    'border-primary-300 bg-primary-200 dark:border-primary-600 dark:bg-primary-700 fixed z-30 h-16 w-full border-b-2 print:hidden',
    'bg-red-300 dark:bg-red-800' => app()->isLocal() || app()->hasDebugModeEnabled()
])>
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <!-- Logo -->
                <a class="flex items-center space-x-3 rtl:space-x-reverse" href="{{ $route }}">
                    {{ $logo }}
                    <div class="hidden self-center whitespace-nowrap text-2xl font-semibold md:block dark:text-white">
                        {{ config('app.name') }}
                    </div>
                </a>
            </div>

            <div class="ml-6 flex items-center space-x-2">
                <!-- Settings Dropdown -->
                <div class="flex items-center">
                    {{ $slot }}
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center xl:hidden">
                    <button
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-white p-2 text-sm font-medium leading-4 text-gray-500 shadow-sm hover:text-gray-700 focus:outline-none dark:bg-gray-700 dark:text-gray-400 dark:hover:text-gray-300"
                        aria-expanded="true" aria-controls="sidebar" @click="sidebarOpen = !sidebarOpen;">
                        <x-heroicon-o-bars-3 class="h-4 w-4" x-show="!sidebarOpen" />
                        <x-heroicon-o-x-mark class="h-4 w-4" x-show="sidebarOpen" x-cloak />
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
