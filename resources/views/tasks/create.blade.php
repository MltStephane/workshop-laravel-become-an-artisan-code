<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <x-validation-errors />
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
                    <div>
                        <input name="name" placeholder="Nom" value="{{ fake()->sentence(2) }}" />
                    </div>
                    <div>
                        <textarea name="description" placeholder="Description">{{ fake()->sentence() }}</textarea>
                    </div>
                    <div>
                        <input name="due_date" type="datetime-local" placeholder="Nom" />
                    </div>
                    <div>
                        <select name="status">
                            @foreach(\App\Enums\TaskStatus::options() as $taskStatus)
                            <option value="{{ $taskStatus['value'] }}">{{ $taskStatus['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <x-button type="submit">Envoyer</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
