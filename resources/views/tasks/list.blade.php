@extends('layouts.app')

@section('content')
    @foreach($errors->all() as $error)
        <span class="help-block">{{ $error }}</span>
    @endforeach

    <ul class="list-group">
        @forelse($tasks as $task)
            <li class="list-group-item">
                {!! $task->done ? '<s>': '' !!}
                    {{ $task->title }}{!! $task->done ? '</s>': '' !!}

                <a href="{{ route('backend.tasks.edit', $task->id)}}">Edit</a>
            </li>
        @empty
            <li class="list-group-item">
                No tasks
                <a href="{{ route('backend.tasks.edit')}}">Create first task</a>
            </li>
        @endforelse
    </ul>
@endsection
