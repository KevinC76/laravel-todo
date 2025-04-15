<div class="mt-6 flex max-w-md gap-x-4 my-8">
    <form action="/" method="POST">
        @csrf
        <label for="todo" class="sr-only">Task</label>
        <input id="email-gray-500 address" name="todo" type="text" autocomplete='false' required
        class="outline-min-w-0 flex-auto rounded-md bg-white px-3.5 py-2 text-base text-black -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-gray-400 sm:text-sm/6"
        placeholder="Enter your task">
        <button type="submit"
        class="flex-none rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-400">Add Task</button>
    </form>
</div>
