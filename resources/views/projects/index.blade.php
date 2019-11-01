@extends('layouts.layout')

@section('content')
<h1 style="text-align: center">Projects</h1>
@endsection

@section('projectShowcase')

<div class="row" style="justify-content: center; margin: 2rem;">
    <div class="card" style="width: 28rem;">
        <div class="card-header">
            My ToDo
        </div>
        @foreach ($projects as $project)
        <div class="card-body">
            <h5 class="card-title">{{$project->title}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a href="/project/{{$project->id}}" class="btn btn-primary" style="width: 6rem;">Show</a>
        </div>
        @endforeach
    </div>
</div>



@endsection