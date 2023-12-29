<x-link-base
    class="bg-info-800 text-white hover:bg-info-700 focus:bg-info-700 focus:ring-info-500 active:bg-info-900 dark:bg-info-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-info-800 dark:active:bg-info-300"
    {{ $attributes }} :route="$route">
    {{ empty(trim($slot)) ? 'Crear' : $slot }}
</x-link-base>
