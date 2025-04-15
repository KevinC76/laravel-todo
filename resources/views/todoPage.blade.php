<x-todo>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
        @foreach ($todos as $todo)
            @if (!$todo->status)
                <div class="w-[300px] h-[300px] bg-indigo-400 px-2 py-2 rounded-md">
                    <div class="flex flex-col items-start justify-between h-full">
                        <h1 class="text-lg text-white">{{ $todo->todo }}</h1>
                        <form action={{ route('todos.update', $todo->id) }} method="POST" class="w-full">
                            @csrf
                            @method('PUT')
                            <button type="submit"
                                class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-xs
                hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white w-full text-center">
                                Mark as done
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>


</x-todo>
