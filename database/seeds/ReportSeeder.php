<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'description' => 'Turma 304, o aluno brigou verbalmente com colega de outra sala.',
            'date' => '2020-05-31',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno fez ofensas e agrediu fisicamente colega de classe.',
            'date' => '2020-06-09',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno de outra turma agrediu fisicamente colega mais novo.',
            'date' => '2020-07-01',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluna teve dificuldades ao realizar a prova, após conversa descobrimos estar sofrendo violência física em casa.',
            'date' => '2020-08-06',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluna que estava infrequente acabamos descobrindo que está grávida.',
            'date' => '2020-09-07',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno sofreu racismo de colega de classe.',
            'date' => '2020-10-08',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno sofreu bullying e homofobia por parte dos colegas durante a aula.',
            'date' => '2020-11-09',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Professor foi agredido por aluno após briga verbal, precisando ser chamada a brigada militar.',
            'date' => '2020-02-05',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Professor ao notar abuso sexual fez contato com o conselho tutelar.',
            'date' => '2020-03-06',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Guarda municipal teve de ser acionada após briga física entre alunos.',
            'date' => '2020-04-07',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Grupo de alunos foi assaltado na frente da escola.',
            'date' => '2020-05-08',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Dois alunos envolvidos em venda de drogas dentro da escola.',
            'date' => '2020-07-09',
            'user_id' => 38,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno foi repreendido por estar pichando a parede da escola.',
            'date' => '2020-06-10',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno foi acusado de vazar fotos intimas do colega de aula.',
            'date' => '2020-02-03',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Professor e aluno trocaram ofensas após aluno discordar de nota recebido.',
            'date' => '2020-09-23',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Professor sofreu agressão física de aluno dentro da secretaria.',
            'date' => '2020-08-26',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno agrediu verbalmente diretora da escola.',
            'date' => '2020-05-27',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Professora sofreu violência digital por parte da turma, em grupo de whatsapp.',
            'date' => '2020-07-21',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno sofreu violência sexual dentro da escola.',
            'date' => '2020-07-30',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluna vítima de violência sexual dentro da sala de aula em momento de troca de professores.',
            'date' => '2020-06-04',
            'user_id' => 88,
        ]);

        DB::table('reports')->insert([
            'description' => 'Grupo de alunos agrediu fisicamente colega na frente da escola.',
            'date' => '2020-03-01',
            'user_id' => 88,
        ]);
    }
}
