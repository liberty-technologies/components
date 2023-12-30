@props(['messages'])

@if ($messages)
    <ul {{ $attributes->twMerge('text-sm text-danger-600 dark:text-danger-400 space-y-1') }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
