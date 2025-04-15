<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    //

    public function index()
    {
        $todo = Todo::all();
        return view("todoPage", ['todos' => $todo]);
    }

    public function store()
    {
        $todo = new Todo();

        $todo->todo = request('todo');
        $todo->color = "yellow";
        $todo->status = false;

        $todo->save();

        return redirect('/todos')->with('success', 'Task Added!');
    }

    public function update($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update([
            'status' => true
        ]);

        return redirect('/todos')->with('success', 'Task marked as done!');
    }
}
