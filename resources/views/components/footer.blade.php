<footer
    class="w-full gap-2 bg-white p-2 text-sm font-medium text-gray-500 shadow sm:rounded-lg sm:px-3 dark:bg-gray-700 dark:text-gray-400">
    <div class="text-center">{{ config('app.name') }}</div>
    <hr class="my-2 h-px border-0 bg-gray-200 dark:bg-gray-700">
    <div class="flex flex-col justify-between gap-1 text-center sm:flex-row">
        <div class="sm:text-start">{{ config('app.owner') }} &copy; {{ date('Y') }}</div>
        @if (empty(trim($slot)) === false)
            <div class="sm:text-end">{{ $slot }}</div>
        @endif
    </div>
</footer>
