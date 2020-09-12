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
            'description' => 'Ocorrência de bulling na escola Santa Mônica',
            'date' => '2020-03-05',
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Ocorrência de violência contra o professor na escola Pelotense',
            'date' => '2020-05-20',
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Ocorrência de agressão entre alunos na escola Pedro Osório',
            'date' => '2020-08-05',
            'user_id' => 1,
        ]);

        DB::table('reports')->insert([
            'description' => 'Ocorrência de bulling na escola Gonzaga',
            'date' => '2020-07-15',
            'user_id' => 1,
        ]);
    }
}
