<div
    class="relative overflow-x-auto rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10">
    <table class="w-full rounded-xl bg-white text-left text-sm text-gray-700 dark:bg-gray-900 dark:text-gray-300">
        <thead class="rounded-t-xl bg-gray-100 text-sm font-semibold text-gray-950 dark:bg-gray-600/50 dark:text-white">
            {{ $head }}
        </thead>
        <tbody>
            {{ $body }}
        </tbody>
        @isset($foot)
            <tfoot class="rounded-b-xl bg-gray-100 text-sm font-semibold text-gray-950 dark:bg-gray-600/50 dark:text-white">
                {{ $foot }}
            </tfoot>
            @endif
        </table>
    </div>
