@component('mail::message')
# New Project {{$project->title}}

Hello,

Here is your project description.

{{$project->description}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/project'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent