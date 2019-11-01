<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $validatedAttributes = request()->validate(['description' => 'required| max:255 | min: 3']);
        $project->addTask($validatedAttributes);

        return back();
    }

    public function update(Task $task)
    {
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task->$method();
        return back();
    }
}
