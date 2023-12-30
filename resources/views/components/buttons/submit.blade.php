<x-lt-components::buttons.base type="submit"
    {{ $attributes->twMerge('bg-success-800 text-white hover:bg-success-700 focus:bg-success-700 focus:ring-success-500 active:bg-success-900 dark:bg-success-200 dark:text-success-800 dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-success-800 dark:active:bg-success-300') }}>
    {{ $slot }}
</x-lt-components::buttons.base>
