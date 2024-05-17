@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todo List</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Create New Todo</a>

        <ul class="list-group">
            @foreach ($todos as $todo)
                <li class="list-group-item">
                    <h4>{{ $todo->title }}</h4>
                    <p>{{ $todo->description }}</p>
                    <div>
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
