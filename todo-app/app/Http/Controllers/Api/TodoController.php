<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'deadline' => 'nullable|date',
        ]);

        $todo = Todo::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => $request->input('deadline'),
            'status' => 'pending', // Default status
        ]);

        return response()->json($todo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todo = Todo::findOrFail($id);
        return response()->json($todo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'deadline' => 'nullable|date',
            'status' => 'nullable|string',
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        return response()->json($todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return response()->json(null, 204);
    }
}
