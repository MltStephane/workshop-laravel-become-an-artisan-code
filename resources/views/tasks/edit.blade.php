<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification') }} - {{ $task->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <x-validation-errors />
                <form action="{{ route('tasks.update', $task) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input name="name" placeholder="Nom" value="{{ $task->name  }}" />
                    </div>
                    <div>
                        <x-input name="description" placeholder="Description" value="{{ $task->description }}" />
                    </div>
                    <div>
                        <x-input name="due_date" type="datetime-local" placeholder="Nom" value="{{ $task->due_date }}" />
                    </div>
                    <div>
                        <select name="status">
                            @foreach(\App\Enums\TaskStatus::options() as $taskStatus)
                                <option
                                    @selected($task->status->value === $taskStatus['value'])
                                    value="{{ $taskStatus['value'] }}"
                                >
                                    {{ $taskStatus['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <x-button type="submit">Modifier</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
