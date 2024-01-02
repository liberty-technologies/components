<footer
    class="flex justify-between bg-white p-2 text-sm font-medium text-gray-500 shadow sm:rounded-lg sm:px-3 dark:bg-gray-700 dark:text-gray-400">
    <div>{{ config('app.name') }} | {{ config('app.owner') }} &copy; {{ date('Y') }}</div>
    @if (empty(trim($slot)) === false)
        <div class="text-rigth">{{ $slot }}</div>
    @endif
</footer>
