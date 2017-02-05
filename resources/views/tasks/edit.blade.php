@extends('layouts.app')

@section('content')
    {{ Form::model($task, ['route' => ['backend.tasks.save', $task->id]]) }}
        {{ Form::bsText('title', 'Title') }}
        {{ Form::bsTextarea('content', 'Content') }}
        {{ Form::bsToggle('done', 'Done', 1) }}

        {{ Form::submit('Save') }}
    {{ Form:: close() }}
@endsection
