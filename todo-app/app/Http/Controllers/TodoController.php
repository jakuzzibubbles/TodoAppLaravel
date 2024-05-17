<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller

{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'description' => 'nullable|string',
    ]);

    $data = $request->only(['title', 'description', 'deadline']);

    $data['status'] = 'pending';

    Todo::create($data);

    return redirect()->route('todos.index')
        ->with('success', 'Todo created successfully.');
}

    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        return redirect()->route('todos.index')
            ->with('success', 'Todo updated successfully.');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todos.index')
            ->with('success', 'Todo deleted successfully.');
    }
}
