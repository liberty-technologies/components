@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->twMerge('border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-info-500 dark:focus:border-info-600 focus:ring-info-500 dark:focus:ring-info-600 rounded-md shadow-sm') }}>
