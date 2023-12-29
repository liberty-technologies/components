<x-button-base {{ $attributes }}
    class="bg-primary-800 text-white hover:bg-primary-700 focus:bg-primary-700 focus:ring-primary-500 active:bg-primary-900 dark:bg-primary-200 dark:text-primary-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-primary-800 dark:active:bg-primary-300"
    @click="expanded = ! expanded">
    <x-heroicon-m-chevron-down class="mr-2 h-4 w-4 duration-200 ease-out" x-bind:class="{ 'rotate-180': expanded }" />
    <span x-text="expanded ? 'Colapsar' : 'Expandir'">Expandir</span>
</x-button-base>
