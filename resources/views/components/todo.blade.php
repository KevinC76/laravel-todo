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
                <x-card></x-card>
            @endfor
        </div>
    </div>
</body>

</html>
