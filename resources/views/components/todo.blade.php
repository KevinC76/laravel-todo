<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Todo</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col items-center justify-center py-16 px-8">
        <h1 class="font-bold text-4xl text-indigo-600">Track your task here</h1>
        <x-todo-input></x-todo-input>
        <div class="grid grid-cols-3 gap-16">
            @for ($i = 0; $i < 10; $i++)
            <div class="w-[300px] h-[300px] bg-indigo-400  px-2 py-2 rounded-md">
                <div class="flex flex-col items-start justify-between h-full">
                    <h1 class="text-lg">Lorem ipsum dolor sit amet.</h1>

                    <a href="#"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-xs
                        hover:bg-gray-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white w-full text-center">Mark
                        as done</a>

                </div>

            </div>

            @endfor
        </div>
    </div>
</body>

</html>
