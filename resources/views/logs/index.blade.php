<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('トレーニング記録') }}
        </h2>
    </x-slot>

    <div class='logs'>
    @foreach ($logs as $log)
        <div class='log'>
             <h2 class='date'>
                 <a href="/log/{{ $log->id }}">{{ $log->date }}</a>
            </h2>
                <a class='text-2xl' href='/log/create'>create</a>
        </div>
    @endforeach
    </div>
</x-app-layout>
        
    