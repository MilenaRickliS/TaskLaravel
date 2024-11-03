<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Arrumar a casa',
            'deadline' => Carbon::now()->addDays(2), 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Academia 18h',
            'deadline' => Carbon::now()->addDays(1), 
            'status' => 'em andamento',
        ]);
        
        Task::create([
            'title' => 'Lavar a louça',
            'deadline' => Carbon::now()->addDays(3), 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Lavar a roupa',
            'deadline' => null, 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Fazer compras mercado',
            'deadline' => Carbon::now()->addDays(5), 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Comprar fraldas',
            'deadline' => Carbon::now()->addDays(7), 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Organizar escritório',
            'deadline' => Carbon::now()->addDays(10),
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Alimentar pets',
            'deadline' => null, 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Passear com o pet',
            'deadline' => Carbon::now()->addDays(1), 
            'status' => 'pendente',
        ]);
        
        Task::create([
            'title' => 'Pagar mensalidade',
            'deadline' => Carbon::now()->addDays(4), 
            'status' => 'pendente',
        ]);
    }
}
