<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Training_Log') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="bg-white w-max h-max-w-fit overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("・部位別トレーニングメニュー") }}
                        <div class="p-6 text-blue"> <a href="/jouhanshin">・腕・肩・胸</a></div>
                        <div class="p-6 text-blue"> <a href="/abs">・腹筋</a></div>
                        <div class="p-6 text-blue"> <a href="/back_training">・背中</a></div>
                        <div class="p-6 text-blue"> <a href="/leg">・脚</a></div>
                    <div class="p-6 text-gray-900">
                        {{ __("料理") }}   
                        <div class="p-6 text-blue"> <a href="/foods">・オススメ食材</a></div>
                        <div class="p-6 text-blue"> <a href="/meals">・簡単な料理</a></div>
                    </div>
                </div>
            <divclass="bg-white w-max h-max-w-fit overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($logs as $log)
                    <div class='log'>
                         <h2 class='date'><a href="/log/{{ $log->id }}">{{ $log->date }}</a></h2>
                    </div>
                @endforeach
                </div>
           </div>
        </div>
    </div>
</x-app-layout>
