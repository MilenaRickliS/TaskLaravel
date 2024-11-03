<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(['title' => 'Arrumar a casa']);
        Task::create(['title' => 'Academia 18h']);
        Task::create(['title' => 'Lavar a louça']);
        Task::create(['title' => 'Lavar a roupa']);
        Task::create(['title' => 'Fazer compras mercado']);
        Task::create(['title' => 'Comprar fraldas']);
        Task::create(['title' => 'Organizar escritório']);
        Task::create(['title' => 'Alimentar pets']);
        Task::create(['title' => 'Passear com o pet']);
        Task::create(['title' => 'Pagar mensalidade']);
    }
}
