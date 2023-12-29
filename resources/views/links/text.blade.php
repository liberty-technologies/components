<x-link-base  {{ $attributes }}
    class="text-info-800 hover:text-info-600 hover:underline hover:decoration-info-500 hover:decoration-2 hover:underline-offset-2 dark:text-info-200 dark:hover:text-info-300"
    :route="$route">
    {{ empty(trim($slot)) ? 'Ver' : $slot }}
</x-link-base>
