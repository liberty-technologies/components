<x-button-base type="submit" {{ $attributes }}
    {{ $attributes->twMerge(['class' => 'bg-success-800 hover:bg-success-700 dark:bg-success-200 focus:bg-success-700 active:bg-success-900 dark:active:bg-success-300 dark:text-success-800 focus:ring-success-500 text-white dark:hover:bg-white dark:focus:bg-white dark:focus:ring-offset-success-800']) }}>
    {{ $slot }}
</x-button-base>
