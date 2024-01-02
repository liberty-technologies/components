@props(['object', 'route'])

@can('delete', $object)
    <div class="flex w-full items-center sm:w-auto" x-data="{ initial: true, deleting: false }">
        <x-lt-components::buttons.base
            class="bg-danger-800 hover:bg-danger-700 focus:bg-danger-700 focus:ring-danger-500 active:bg-danger-900 dark:bg-danger-200 dark:focus:ring-offset-danger-800 dark:active:bg-danger-300 w-full text-white dark:text-gray-800 dark:hover:bg-white dark:focus:bg-white"
            {{ $attributes }} x-on:click.prevent="deleting = true; initial = false" x-show="initial"
            x-on:deleting.window="$el.disabled = true">
            {{ empty(trim($slot)) ? 'Eliminar' : $slot }}
        </x-lt-components::buttons.base>

        <div class="bg-danger-800 dark:bg-danger-200 flex w-full items-center justify-center rounded-md border border-transparent px-2 py-1"
            x-show="deleting" x-cloak>
            <span class="mr-1 text-sm font-semibold text-gray-200 dark:text-gray-800">Confirmar</span>

            <form class="inline" x-on:submit="$dispatch('deleting')" method="post" action="{{ $route }}">
                @csrf
                @method('delete')

                <button
                    class="bg-danger-200 focus:ring-danger-800 dark:bg-danger-700 dark:hover:bg-danger-800 dark:focus:ring-danger-300 rounded-lg px-2 py-1 text-center text-xs font-medium text-gray-800 hover:bg-white focus:outline-none focus:ring-4 dark:text-white"
                    type="submit" x-on:click="$el.form.submit()" x-on:deleting.window="$el.disabled = true">
                    Si
                </button>

                <button
                    class="rounded-lg bg-gray-200 px-2 py-1 text-center text-xs font-medium text-gray-800 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-800 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:ring-gray-300"
                    x-on:click.prevent="deleting = false; setTimeout(() => { initial = true }, 150)"
                    x-on:deleting.window="$el.disabled = true"> No
                </button>
            </form>
        </div>
    </div>
@endcan
