@extends('layouts.app')

@section('content')
    @if(isset($task) && $task->id)
        <h1>{{ $task->title }}</h1>
    @else
        <p>Task not found.</p>
    @endif
    
    <a href="{{ route('tasks.index') }}">Voltar a lista de tarefas</a>
@endsection