<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Secretaria',
            'phone' => ('53981115566'),
            'email' => 'secretaria@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Osório, 1090',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('manager');

        $user = User::create([
            'name' => 'Escola',
            'phone' => ('53981115566'),
            'email' => 'escola@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Osório, 1090',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');
    }
}
