@extends('layouts.app')

@section('content')
    @if(isset($task) && $task->id)
        <h1>{{ $task->title }}</h1>
        <p>Data de Prazo: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d/m/Y') : 'Sem prazo' }}</p>
        <p>Status: {{ ucfirst($task->status) }}</p>
    @else
        <p>Tarefa não encontrada.</p>
    @endif
    
    <a href="{{ route('tasks.index') }}">Voltar a lista de tarefas</a>
@endsection