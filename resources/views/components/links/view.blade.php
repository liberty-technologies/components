@can('view', $object)
    <x-lt-components::links.base
        class="bg-info-800 hover:bg-info-700 focus:bg-info-700 focus:ring-info-500 active:bg-info-900 dark:bg-info-200 dark:focus:ring-offset-info-800 dark:active:bg-info-300 text-white dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white"
        {{ $attributes }} :route="$route">
        {{ empty(trim($slot)) ? 'Ver' : $slot }}
    </x-lt-components::links.base>
@endcan
