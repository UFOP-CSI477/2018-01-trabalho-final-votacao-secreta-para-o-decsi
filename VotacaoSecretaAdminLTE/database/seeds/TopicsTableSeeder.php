<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Topic::create([
            'title' => 'Flexibilização da grade curricular',
            'user_id' => 1,
            'description' => 'Mudar o carater de UMA, DUAS ou TRÊS disciplinas para eletiva e manter a oferta das disciplinas pelo departamento (agora como eletiva). ',
            'opened' => 1,
            'visible' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        Topic::create([
            'title' => 'Estágio Supervisionado',
            'user_id' => 1,
            'description' => 'Mudar o carater do estágio supervisionado de obrigatório para opcional (atividade extracurricular), aumentando a carga horária de atividades extracurriculares para 450 (240+210) e ampliando os limites de carga horária para algumas atividades',
            'opened' => 1,
            'visible' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        Topic::create([
            'title' => 'Fundamentos de disciplinas',
            'user_id' => 1,
            'description' => 'Retirar o caracter de "Fundamentos" em: Cálculo, Geometria Analítica e Álgebra Linear, Redes de Computadores e Arquitetura de Computadores e fazer as correções de ementa necessárias para unificar ementas com Engenharia de Computação. ',
            'opened' => 0,
            'visible' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        Topic::create([
            'title' => 'Aprovar todos os alunos 15.2 em todas materias',
            'user_id' => 1,
            'description' => 'Como os alunos 15.2 são otimos alunos, estes devem ser aprovados, ganhando o diploma de forma imediata',
            'opened' => 0,
            'visible' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

}
