<div class="space-y-3 bg-white p-4 shadow sm:rounded-lg sm:p-6 dark:bg-gray-700" {{ $attributes }}>
    @isset($title)
        <div class="flex flex-col items-center justify-between sm:flex-row">
            @isset($title)
                <h1 class="font-heading flex items-center text-xl font-bold leading-none text-gray-900 dark:text-gray-100">
                    {{ $title }}
                </h1>
            @endisset
            @isset($actions)
                <div
                    class="ml-0 mt-3 flex w-full flex-col space-y-2 sm:ml-3 sm:mt-0 sm:w-auto sm:flex-row sm:space-x-2 sm:space-y-0">
                    {{ $actions }}
                </div>
            @endisset
        </div>
    @endisset
    @if (!empty(trim($slot)))
        {{ $slot }}
    @endif
</div>
