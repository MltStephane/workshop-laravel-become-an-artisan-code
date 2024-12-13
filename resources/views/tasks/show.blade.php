<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $task->name }}
            </h2>
            <div class="flex items-center gap-2">
                <x-nav-link href="{{ route('tasks.edit', $task) }}">
                    Modifier
                </x-nav-link>

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button>
                        Supprimer
                    </x-button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 space-y-4">
                {{ $task }}
            </div>
        </div>
    </div>
</x-app-layout>
