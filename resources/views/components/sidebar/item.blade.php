<li>
    <a href="{{ $route }}" @class([
        'group flex items-center rounded-lg p-2 transition duration-75 hover:bg-primary-300 hover:text-primary-900 hover:shadow-sm hover:fill-primary-900 text-xs sm:text-base',
        'bg-primary-700 text-primary-100 text-white shadow-sm dark:bg-primary-100 dark:text-primary-900 fill-primary-100 dark:fill-primary-900' => $active,
        'text-primary-900 dark:text-primary-100 fill-primary-900 dark:fill-primary-100' => !$active,
    ]) {{ $attributes }}>
        <x-icon class="h-4 w-4 flex-shrink-0 sm:h-6 sm:w-6" :name="$icon" />
        <span class="ml-2 font-semibold">{{ $slot }}</span>
    </a>
</li>
