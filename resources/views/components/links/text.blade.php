<x-lt-components::links.base
    class="text-info-800 hover:text-info-600 hover:decoration-info-500 dark:text-info-200 dark:hover:text-info-300 hover:underline hover:decoration-2 hover:underline-offset-2"
    {{ $attributes }} :route="$route">
    {{ empty(trim($slot)) ? 'Ver' : $slot }}
</x-lt-components::links.base>
