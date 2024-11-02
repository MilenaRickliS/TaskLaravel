@extends('layouts.app')

@section('content')
<br>
<a href="{{ route('tasks.index') }}" class="voltar" ><-- Voltar para lista de tarefas</a>
    <h1>Criar Tarefa</h1>
    <form action="{{ route('tasks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <button  class="salvar" type="submit">Salvar</button>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>
@endsection