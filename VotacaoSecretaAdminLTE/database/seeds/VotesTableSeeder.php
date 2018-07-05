<?php

use Illuminate\Database\Seeder;
use App\Vote;
class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vote::create([
            'topic_id' =>'1',
            'option' => 'Transformar 3 disciplinas obrigatórias em eletiva (8 eletivas)',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'1',
            'option' => 'Transformar 2 disciplinas obrigatórias em eletiva (7 eletivas)',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'1',
            'option' => 'Transformar 1 disciplina obrigatória em eletiva (6 eletivas)',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'1',
            'option' => 'Transformar 0 disciplinas obrigatórias em eletiva (manter 5 eletivas)',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'1',
            'option' => 'Sem opnião',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'2',
            'option' => 'Tornar o estágio curricular optativo, a ser aproveitado como atividade extracurricular',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'2',
            'option' => 'Manter o estágio curricular como obrigatório para integralização do curso',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'2',
            'option' => 'Sem opnião',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'3',
            'option' => 'Unificar as ementas de Cálculo, GAAL, Redes de Computadores e Arquitetura de Computadores com a Engenharia de Computação',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'3',
            'option' => 'Manter "Fundamentos" de Cálculo, de GAAL, de Redes de Computadores e de Arquitetura de Computadores',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'3',
            'option' => 'Sem opnião',
            'amount' =>'0',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'4',
            'option' => 'Concordo Plenamente',
            'amount' =>'2',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'4',
            'option' => 'Concordo',
            'amount' =>'3',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
        Vote::create([
            'topic_id' =>'4',
            'option' => 'Claro que Concordo',
            'amount' =>'1',
            'created_at' =>  date('Y-m-d H:i:s'),
            'updated_at' =>  date('Y-m-d H:i:s'),
        ]);
    }
}
