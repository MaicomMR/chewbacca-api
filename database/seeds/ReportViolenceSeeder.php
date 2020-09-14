<?php

use Illuminate\Database\Seeder;
use App\ReportViolence;

class ReportViolenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report_violence')->insert([
            'report_id' => 1,
            'violence_id' => 11,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 1,
            'violence_id' => 14,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 2,
            'violence_id' => 10,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 2,
            'violence_id' => 11,

        ]);

        DB::table('report_violence')->insert([
            'report_id' => 2,
            'violence_id' => 14,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 3,
            'violence_id' => 10,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 3,
            'violence_id' => 14,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 4,
            'violence_id' => 10,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 5,
            'violence_id' => 1,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 6,
            'violence_id' => 8,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 7,
            'violence_id' => 8,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 7,
            'violence_id' => 3,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 8,
            'violence_id' => 15,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 8,
            'violence_id' => 11,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 8,
            'violence_id' => 6,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 9,
            'violence_id' => 13,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 9,
            'violence_id' => 6,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 10,
            'violence_id' => 10,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 10,
            'violence_id' => 14,
        ]);


        DB::table('report_violence')->insert([
            'report_id' => 10,
            'violence_id' => 6,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 11,
            'violence_id' => 2,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 12,
            'violence_id' => 7,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 13,
            'violence_id' => 12,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 14,
            'violence_id' => 9,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 15,
            'violence_id' => 11,
        ]);
        DB::table('report_violence')->insert([
            'report_id' => 15,
            'violence_id' => 15,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 16,
            'violence_id' => 10,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 16,
            'violence_id' => 15,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 17,
            'violence_id' => 11,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 17,
            'violence_id' => 15,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 18,
            'violence_id' => 9,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 18,
            'violence_id' => 15,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 19,
            'violence_id' => 13,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 20,
            'violence_id' => 13,
        ]);

        DB::table('report_violence')->insert([
            'report_id' => 21,
            'violence_id' => 13,
        ]);
    }
}
