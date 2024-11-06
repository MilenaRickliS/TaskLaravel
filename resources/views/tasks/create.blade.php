@extends('layouts.app')

@section('content')
<br>
    <h1>Criar Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="deadline">Data de Prazo:</label>
        <input type="date" name="deadline" id="deadline">
        <br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pendente" selected>Pendente</option>
            <option value="em andamento">Em Andamento</option>
            <option value="concluída">Concluída</option>
        </select>
        <br>
        <button  class="salvar" type="submit">Salvar</button>
        <br>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<br><br>
    <a href="{{ route('tasks.index') }}" class="voltar" ><-- Voltar para lista de tarefas</a>
    </form>
@endsection