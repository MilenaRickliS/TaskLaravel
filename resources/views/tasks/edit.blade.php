@extends('layouts.app')

@section('content')
<br>
<a href="{{ route('tasks.index') }}" class="voltar" ><-- Voltar para lista de tarefas</a>
<br>  <br>  
<h1>Editar Tarefa</h1>
    @if(isset($task) && $task->id)
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{$task->title}}" required>
        <br>
        <label for="deadline">Data de Prazo:</label>
        <input type="date" name="deadline" id="deadline" value="{{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('Y-m-d') : '' }}">
        <br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pendente" {{ $task->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="em andamento" {{ $task->status == 'em andamento' ? 'selected' : '' }}>Em Andamento</option>
            <option value="concluída" {{ $task->status == 'concluída' ? 'selected' : '' }}>Concluída</option>
        </select>
        <br>
        <button class="salvar" type="submit">Salvar</button>
    </form>

    @else
        <p>Tarefa não encontrada.</p>
    @endif
@endsection