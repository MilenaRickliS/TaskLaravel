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
        <button class="salvar" type="submit">Salvar</button>
    </form>

    @else
        <p>Task not found.</p>
    @endif
@endsection