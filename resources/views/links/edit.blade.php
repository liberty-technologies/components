@can('update', $object)
    <x-link-base  {{ $attributes }}
        class="bg-info-800 text-white hover:bg-info-700 focus:bg-info-700 focus:ring-info-500 active:bg-info-900 dark:bg-info-200 dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-info-800 dark:active:bg-info-300"
        :route="$route">
        {{ empty(trim($slot)) ? 'Editar' : $slot }}
    </x-link-base>
@endcan
