@extends('layouts.app')

@section('content')
<h1>Lista de Tarefas</h1>
<div class="button-container">
    <a class="criar" href="{{ route('tasks.create') }}">Criar Nova Tarefa</a>
</div>
<div class="tarefas">
    @foreach ($tasks as $task)
        <div class="task">
            <div>
                <h2>{{ $task->title }}</h2>
                <p>Data de Prazo: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d/m/Y') : 'Sem prazo' }}</p>
                <p>Status: 
                    <span class="{{ 
                        $task->status == 'pendente' ? 'status-pendente' : 
                        ($task->status == 'em andamento' ? 'status-andamento' : 
                        'status-concluida') 
                    }}">
                        {{ ucfirst($task->status) }}
                    </span></p>
                <a class="show" href="{{ route('tasks.show', $task->id) }}">Visualizar Tarefa</a>
            </div>
            
            <div>
                <a class="editar" href="{{ route('tasks.edit', $task->id) }}"><i class="bi bi-pencil-fill"></i> Editar Tarefa</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="excluir" type="submit"><i class="bi bi-trash3-fill"></i> Excluir Tarefa</button>
                </form>
            </div>
            
        </div>
        <br>
    @endforeach
</div>
@endsection