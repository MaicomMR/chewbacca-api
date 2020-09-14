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
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno fez ofensas e agrediu fisicamente colega de classe.',
            'date' => '2020-06-09',
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno de outra turma agrediu fisicamente colega mais novo.',
            'date' => '2020-07-01',
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluna teve dificuldades ao realizar a prova, após conversa descobrimos estar sofrendo violência física em casa.',
            'date' => '2020-08-06',
            'user_id' => 2,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluna que estava infrequente acabamos descobrindo que está grávida.',
            'date' => '2020-09-07',
            'user_id' => 2,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno sofreu racismo de colega de classe.',
            'date' => '2020-10-08',
            'user_id' => 2,
        ]);

        DB::table('reports')->insert([
            'description' => 'Aluno sofreu bullying e homofobia por parte dos colegas durante a aula.',
            'date' => '2020-11-09',
            'user_id' => 2,
        ]);
    }
}
