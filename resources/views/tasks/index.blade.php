@extends('layouts.app')

    @section('content')
    <h1>Lista de Tarefas</h1>
    <div class="button-container">
        <a class="criar" href="{{ route('tasks.create') }}">Criar Tarefa</a>
    </div>
    <div class="tarefas">
    @foreach ($tasks as $task)
        <div class="task">
            <h2>{{ $task->title }}</h2>
            <a class="show" href="{{ route('tasks.show', $task->id) }}">Visualizar Tarefa</a>
            <a class="editar" href="{{ route('tasks.edit', $task->id) }}">Editar Tarefa</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="excluir" type="submit">Excluir Tarefa</button>
            </form>
        </div>
        <br>
    @endforeach
    </div>
   
@endsection