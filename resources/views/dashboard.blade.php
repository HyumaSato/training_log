<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="bg-white w-32 h-max-w-fit overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("・部位別トレーニングメニュー") }}
                    </div>
                </div>
                <div>あかさたな</div>
           </div>
        </div>
    </div>
</x-app-layout>
