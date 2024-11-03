@extends('layouts.app')

@section('content')
<div class="show-task">
    @if(isset($task) && $task->id)
        <h1>{{ $task->title }}</h1>
        <p>Data de Prazo: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d/m/Y') : 'Sem prazo' }}</p>
        <p>Status: 
            <span class="{{ 
                        $task->status == 'pendente' ? 'status-pendente' : 
                        ($task->status == 'em andamento' ? 'status-andamento' : 
                        'status-concluida') 
                    }}">    
        {{ ucfirst($task->status) }}</span></p>
    @else
        <p>Tarefa não encontrada.</p>
    @endif
    <a href="{{ route('tasks.index') }}" class="voltar" ><-- Voltar para lista de tarefas</a>
</div>
@endsection