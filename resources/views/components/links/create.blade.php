@can('create', $object)
    <x-lt-components::links.base
        class="bg-success-800 hover:bg-success-700 focus:bg-success-700 focus:ring-success-500 active:bg-success-900 dark:bg-success-200 dark:focus:ring-offset-success-800 dark:active:bg-success-300 text-white dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white"
        {{ $attributes }} :route="$route">
        {{ empty(trim($slot)) ? 'Crear' : $slot }}
    </x-lt-components::links.base>
@endcan
