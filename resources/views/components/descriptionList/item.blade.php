<div class="border-b border-gray-200 px-3 py-2 first-of-type:rounded-t-xl first-of-type:border-t-0 last-of-type:rounded-b-xl last-of-type:border-b-0 hover:bg-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-4 dark:border-gray-600 dark:hover:bg-gray-600"
    {{ $attributes }}>
    <dt class="text-sm font-medium capitalize text-gray-500 dark:text-gray-300">{{ $title }}</dt>
    <dd class="mt-1 flex items-center justify-between text-sm text-gray-900 sm:col-span-2 sm:mt-0 sm:justify-start dark:text-gray-100"
        id="{{ $slotId ?? null }}">
        {{ $slot }}
    </dd>
</div>
