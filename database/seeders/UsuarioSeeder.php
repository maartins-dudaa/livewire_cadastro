<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i <= 400; $i++){
        $ano = rand(1990, 2005);
        $mes = rand(01, 12);
        $dia = rand(01, 28);
        $estados = collect(['São Paulo', 'Minas Gerais', 'Rio de Janeiro', 'Manaus', 'Pernanbuco', 'Acre']);
        $cidades = collect(['Presidente Epitácio', 'Sorocaba', 'Marilia', 'Ribeirão Preto', 'São José do Rio Preto', 
        'Florianopólis', 'Foz do Iguaçu', 'Ubatuba', 'Belo Horizonte', 'Porto Seguro']);
        
            Usuario::create([
                'nome' => 'nometeste' . $i,
                'email' => 'teste1@teste.com' . $i,
                'celular' => '18 12345-9876',
                'estado_civil' => 'casado',
                'data_nascimento' => $ano . '-' . $mes . '-' . $dia,
                'cidade'=> $cidades->random(),
                'estado'=> $estados->random(),
                'endereco'=> 'rua teste vila teste',
                'cep'=> '12344 0003',
                'password'=> 'senha123'

            ]);
        }
    }
}
