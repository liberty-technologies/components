<aside class="fixed inset-y-0 left-0 top-0 z-20 h-full w-44 flex-shrink-0 flex-col pt-16 print:hidden sm:w-64 xl:flex"
       id="sidebar" data-simplebar aria-label="{{ __('Sidebar') }}" x-bind:class="{ 'hidden': !sidebarOpen }"
       x-transition.opacity>
    <nav
        class="w-full overflow-y-auto border-r-2 border-primary-300 bg-primary-200 px-3 pb-4 pt-5 dark:border-primary-600 dark:bg-primary-700">
        <ul class="space-y-2">
           {{ $slot }}
        </ul>
    </nav>
</aside>
<div class="fixed inset-0 z-10 bg-primary-900 opacity-50" x-show="sidebarOpen" x-cloak
     @click="sidebarOpen = !sidebarOpen;"></div>
