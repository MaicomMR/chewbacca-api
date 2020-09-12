<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Secretaria',
            'phone' => ('53981115566'),
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Osório, 1090',
            'neighborhood' => 'Centro',
            'admin_level' => 1,
        ]);
    }
}
