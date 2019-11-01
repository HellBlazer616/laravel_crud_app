@extends('layouts.layout')

@section('content')
<h1>Edit a existing Project</h1>
@endsection


@section('formProjects')

<form action="/project/{{$project->id}}" method="post">
    @method('PATCH')
    @csrf

    <div class="form-group">
        <label for="Project Title">Project Title</label>
        <input name="title" type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
            id="exampleFormControlInput1" placeholder="Project title" value="{{$project->title}}" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Project Description</label>
        <textarea name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
            id="exampleFormControlTextarea1" placeholder="Project Description" required
            rows="3">{{$project->description}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Edit Project</button>
    </div>

</form>

<form action="/project/{{$project->id}}" method="post">
    @method('DELETE')
    @csrf
    <button class="btn btn-primary type=" submit">Delete Project</button>

</form>

@include('layouts/errors')

@endsection