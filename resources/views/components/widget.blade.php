<div
    {{ $attributes->twMerge('break-words bg-info-100 px-2 py-1.5 shadow dark:bg-info-800 sm:rounded-lg sm:px-4 sm:py-3') }}>
    <p class="mb-0 font-sans font-semibold leading-normal text-gray-600 dark:text-gray-300">{{ $title }}</p>
    <div class="mb-0 flex flex-row justify-between font-bold text-gray-700 dark:text-gray-200">
        {{ $slot }}
    </div>
</div>
