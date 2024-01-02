@if ($errors->any())
    <div class="mb-4 flex items-center rounded-md border border-red-200 bg-red-100 p-4 text-sm text-red-700 shadow"
        role="alert">
        <x-heroicon-o-exclamation-circle class="mr-3 h-4 w-4" />
        <p>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </p>
    </div>
@endif
