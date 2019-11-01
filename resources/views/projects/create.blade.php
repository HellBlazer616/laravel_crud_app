@extends('layouts.layout')

@section('content')
<h1 style="text-align:center">Create a new Project</h1>
@endsection


@section('formProjects')
<div class="container">
    <form action="/project" method="post">

        @csrf

        <div class="form-group">
            <label for="Project Title">Project Title</label>
            <input name="title" type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}} "
                id="exampleFormControlInput1" placeholder="Project title" value="{{old('title')}}" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
                id="exampleFormControlTextarea1" placeholder="Project Description" required
                rows="3">{{old('description')}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </div>
    </form>

    @include('layouts/errors')
</div>
@endsection