<?php

use Illuminate\Database\Seeder;
use App\registro;

class registrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        registro::create([
        	'id_aluno' => '1',
        	'motivo' => 'Dormiu',
        	'datahoraatraso' => '2018-01-01 10:00:00',
            'materia' => 'matemática'
        	]);
    }
}
