@extends('layouts.app')

@section('title', 'Create New Todo')

@section('content')
    <h2>Create New Todo</h2>

    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <button type="submit">Add Todo</button>
    </form>
@endsection

