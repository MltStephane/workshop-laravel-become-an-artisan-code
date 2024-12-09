<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 space-y-4">
                @foreach(\Illuminate\Support\Facades\Auth::user()->currentTeam->tasks as $task)
                    <a href="#" class="block">
                        {{ $task }}
                    </a>

                    @if(!$loop->last)
                        <hr />
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
