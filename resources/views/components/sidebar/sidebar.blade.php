<aside
    class="border-primary-300 bg-primary-200 dark:border-primary-600 dark:bg-primary-700 fixed inset-y-0 left-0 top-0 z-20 h-full w-44 flex-shrink-0 flex-col border-r-2 pt-16 sm:w-64 xl:flex print:hidden"
    id="sidebar" data-simplebar aria-label="{{ __('Sidebar') }}" x-bind:class="{ 'hidden': !sidebarOpen }"
    x-transition.opacity>
    <nav class="min-h-full w-full overflow-y-auto px-3 pb-4 pt-5">
        <ul class="space-y-2">
            {{ $slot }}
        </ul>
    </nav>
</aside>
<div class="bg-primary-900 fixed inset-0 z-10 opacity-50" x-show="sidebarOpen" x-cloak
    @click="sidebarOpen = !sidebarOpen;"></div>
