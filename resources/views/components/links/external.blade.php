<a class="hover:text-info-700 hover:decoration-info-600 dark:hover:text-info-200 dark:hover:decoration-info-400 flex items-center space-x-1 hover:underline hover:decoration-2 hover:underline-offset-1" {{ $attributes }}
    href="{{ $route }}">
    <p>{{ $slot }}</p>
    <x-heroicon-m-arrow-top-right-on-square class="h-4 w-4" />
</a>
