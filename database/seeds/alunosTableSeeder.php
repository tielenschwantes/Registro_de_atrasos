<?php

use Illuminate\Database\Seeder;
use App\Aluno;

class alunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create{[
        	'id' => '1',
        	'nome' => 'Bianca Walbrink',
        	'turma' => '302'
        	]};

        	Aluno::create{[
        	'id' => '2',
        	'nome' => 'Gabrieli Brais',
        	'turma' => '302'
        	]};

        	Aluno::create{[
        	'id' => '3',
        	'nome' => 'Tiélen Schwantes',
        	'turma' => '302'
        	]};

    }
}
