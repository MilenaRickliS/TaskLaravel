<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index(){

        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id){
        $task = Task::find($id);

        if(!$task){
            return redirect()->route('tasks.index')->with('error', 'Tarefa não encontrada.');
        }

        return view('tasks.show', compact('task'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'status' => 'required|string|in:pendente,em andamento,concluída',
        ]);
    
    
        $task = Task::create($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Produto criado com sucesso!');
    }

    public function edit($id){
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'status' => 'required|string|in:pendente,em andamento,concluída',
        ]);
    
        $task = Task::find($id);
    
        $task->update($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id){
        $task = Task::find($id);

        $task->delete();
        return redirect()->route('tasks.index');
    }
}
