<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    /*Essa classe, tem a função de chamar outras seeders*/
    {
        $this->call([
            TarefaSeeder::class,
            UsuarioSeeder::class
                ]);
    }
}
