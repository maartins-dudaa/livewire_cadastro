<?php

namespace Database\Seeders;

use App\Models\Tarefa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i<=200; $i++)
        Tarefa::create([
          'nome' => 'Teste',
          'data_hora' => '2025-02-12 07:00:00',
          'descricao' => 'teste de descricao'

        ]);
    
    }
}
