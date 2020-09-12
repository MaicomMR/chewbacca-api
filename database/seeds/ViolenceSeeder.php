<?php

use Illuminate\Database\Seeder;

class ViolenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('violences')->insert([
            'name' => 'Bulling',
            'slug' => Str::slug('Bulling'),
            'description' => 'bulling se trata de uma violencia',
            'media_link' => 'http://link.me'
        ]);

        DB::table('violences')->insert([
            'name' => 'Agressao',
            'slug' => Str::slug('Agressao'),
            'description' => 'Agressao se trata de uma violencia',
            'media_link' => 'http://link.me'
        ]);

        DB::table('violences')->insert([
            'name' => 'Crime',
            'slug' => Str::slug('Crime'),
            'description' => 'Crime se trata de uma violencia',
            'media_link' => 'http://link.me'
        ]);
    }
}
