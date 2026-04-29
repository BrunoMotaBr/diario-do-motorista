<x-app-layout>
    <x-slot name="header">
        <div style="
            background-image: var(--principal-gradiente-verde);
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            ">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>

    </x-slot>
</x-app-layout>
