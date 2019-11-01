@extends('layouts.layout')

@section('content')
<h1 style="text-align: center">Showing a existing Project</h1>
@endsection


@section('formProjects')
<div class="row" style="justify-content: center; margin: 2rem;">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            My ToDo
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$project->title}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a href="/project/{{$project->id}}/edit" class="btn btn-primary" style="width: 6rem;">Edit</a>

            @if ($project->tasks->count())
            @foreach ($project->tasks as $task)
            <form action="/tasks/{{$task->id}}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-check  mt-2 mb-2">
                    <input type="checkbox" class="form-check-input" name="completed" id="task_completed"
                        onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                    <label class="form-check-label" for="task">{{$task->description}}</label>
                </div>
            </form>
            @endforeach
            @endif

            <form action="/project/{{$project->id}}/tasks" method="post">
                @csrf
                <div class="form-group">
                    <input name="description" type="text" class="form-control" placeholder="Task" required>
                </div>
                <button class="btn btn-primary" style="width: 6rem;">Add Task</button>
            </form>

            @include('layouts/errors')

        </div>
    </div>
</div>
@endsection