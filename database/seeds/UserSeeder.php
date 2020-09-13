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
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');








        $user = User::create([
            'name' => 'Adayl Bento Costa',
            'phone' => ('53981115566'),
            'email' => 'adayl@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Albina Péres',
            'phone' => ('53981115566'),
            'email' => 'albinaperes@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Anita Malfatti',
            'phone' => ('53981115566'),
            'email' => 'anita@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Antônio Caringi',
            'phone' => ('53981115566'),
            'email' => 'caringi@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Bernardo de Souza',
            'phone' => ('53981115566'),
            'email' => 'bernardo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Cassiano Ricardo',
            'phone' => ('53981115566'),
            'email' => 'cassiano@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Centro de Autismo Danilo Rolim',
            'phone' => ('53981115566'),
            'email' => 'danilorolim@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Colégio Municipal Pelotense',
            'phone' => ('53981115566'),
            'email' => 'pelotense@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Darcy Ribeiro',
            'phone' => ('53981115566'),
            'email' => 'darci@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Colônia',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Dyrio Gorgot',
            'phone' => ('53981115566'),
            'email' => 'dyrio@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Afonso Vizeu',
            'phone' => ('53981115566'),
            'email' => 'afonso@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Alcides de Mendonça Lima',
            'phone' => ('53981115566'),
            'email' => 'alcides@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Alm. Saldanha da Gama',
            'phone' => ('53981115566'),
            'email' => 'saldanha@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Antônio Joaquim Dias',
            'phone' => ('53981115566'),
            'email' => 'joaquim@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Antônio Ronna',
            'phone' => ('53981115566'),
            'email' => 'ronna@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Barragem',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Arthur de Souza Costa',
            'phone' => ('53981115566'),
            'email' => 'arthur@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Balbino Mascarenhas',
            'phone' => ('53981115566'),
            'email' => 'balbino@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Bibiano de Almeida',
            'phone' => ('53981115566'),
            'email' => 'bibiano@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Braulinda Fernandes',
            'phone' => ('53981115566'),
            'email' => 'braulina@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Brum de Azeredo',
            'phone' => ('53981115566'),
            'email' => 'brum@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Bruno Chaves',
            'phone' => ('53981115566'),
            'email' => 'brunochaves@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Carlos Laquintinie',
            'phone' => ('53981115566'),
            'email' => 'laquintinie@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Cecília Meireles',
            'phone' => ('53981115566'),
            'email' => 'cecilaim@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Circulo Operário Pelotense',
            'phone' => ('53981115566'),
            'email' => 'circulo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Daura F. Pinto',
            'phone' => ('53981115566'),
            'email' => 'daura@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Dom Francisco Barreto',
            'phone' => ('53981115566'),
            'email' => 'barreto@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Dr. Berchon',
            'phone' => ('53981115566'),
            'email' => 'berchon@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Dr. Joaquim Assumpção',
            'phone' => ('53981115566'),
            'email' => 'emeljoaquim@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Dr. Mário Meneghetti',
            'phone' => ('53981115566'),
            'email' => 'meneghetti@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Erasmo Braga',
            'phone' => ('53981115566'),
            'email' => 'erasmo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Evaristo da Veiga',
            'phone' => ('53981115566'),
            'email' => 'evaristo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Ferreira Vianna',
            'phone' => ('53981115566'),
            'email' => 'ferreirav@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Francisco Carúccio',
            'phone' => ('53981115566'),
            'email' => 'caruccio@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Frederico Ozanan',
            'phone' => ('53981115566'),
            'email' => 'ozanan@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Garibaldi',
            'phone' => ('53981115566'),
            'email' => 'garibaldi@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Fragata',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Getúlio Vargas',
            'phone' => ('53981115566'),
            'email' => 'gv@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Henrique Peter',
            'phone' => ('53981115566'),
            'email' => 'hp@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Honorina Torres',
            'phone' => ('53981115566'),
            'email' => 'honorina@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Independência',
            'phone' => ('53981115566'),
            'email' => 'indep@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Jacob Brod',
            'phone' => ('53981115566'),
            'email' => 'brod@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Jeremias Froes',
            'phone' => ('53981115566'),
            'email' => 'froes@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF João da Silva Silveira',
            'phone' => ('53981115566'),
            'email' => 'jss@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF João José de Abreu',
            'phone' => ('53981115566'),
            'email' => 'jja@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Joaquim Nabuco',
            'phone' => ('53981115566'),
            'email' => 'nabuco@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Jornalista Deogar Soares',
            'phone' => ('53981115566'),
            'email' => 'deogar@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Júlio de Castilhos',
            'phone' => ('53981115566'),
            'email' => 'castilhos@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Lima e Silva',
            'phone' => ('53981115566'),
            'email' => 'silva@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Luciana de Araújo',
            'phone' => ('53981115566'),
            'email' => 'luciana@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Luiz Augusto de Assumpção',
            'phone' => ('53981115566'),
            'email' => 'laa@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Machado de Assis',
            'phone' => ('53981115566'),
            'email' => 'machadoa@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Três Vendas',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Márcio Dias',
            'phone' => ('53981115566'),
            'email' => 'marciod@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Maria Antônia',
            'phone' => ('53981115566'),
            'email' => 'mariaa@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Maria Joaquina',
            'phone' => ('53981115566'),
            'email' => 'joaquina@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Mariana Eufrásia',
            'phone' => ('53981115566'),
            'email' => 'eufrasia@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Ministro Fernando Osório',
            'phone' => ('53981115566'),
            'email' => 'fosorio@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Nestor Crochemore',
            'phone' => ('53981115566'),
            'email' => 'crochemore@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Nossa Senhora das Dores',
            'phone' => ('53981115566'),
            'email' => 'nsdores@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Nossa Senhora de Lourdes',
            'phone' => ('53981115566'),
            'email' => 'nslourdes@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Nossa Senhora do Carmo',
            'phone' => ('53981115566'),
            'email' => 'nscarmo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Núcleo Habitacional Dunas',
            'phone' => ('53981115566'),
            'email' => 'dunas@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Núcleo Habitacional Getúlio Vargas',
            'phone' => ('53981115566'),
            'email' => 'nucleogv@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Olavo Bilac',
            'phone' => ('53981115566'),
            'email' => 'olavob@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Osvaldo Cruz',
            'phone' => ('53981115566'),
            'email' => 'ocruz@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Piratinino de Almeida',
            'phone' => ('53981115566'),
            'email' => 'piratinino@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Raphael Brusque',
            'phone' => ('53981115566'),
            'email' => 'brusque@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Areal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Santa Irene',
            'phone' => ('53981115566'),
            'email' => 'irene@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Santa Terezinha',
            'phone' => ('53981115566'),
            'email' => 'terezinha@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Waldemar Denzer',
            'phone' => ('53981115566'),
            'email' => 'waldemar@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'EMEF Wilson Muller',
            'phone' => ('53981115566'),
            'email' => 'muller@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Érico Veríssimo',
            'phone' => ('53981115566'),
            'email' => 'ericove@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Graciliano Ramos',
            'phone' => ('53981115566'),
            'email' => 'graciramos@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Herbert J. de Souza',
            'phone' => ('53981115566'),
            'email' => 'helbert@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Ivanir Dias',
            'phone' => ('53981115566'),
            'email' => 'ivanir@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Jacema Prestes',
            'phone' => ('53981115566'),
            'email' => 'jacema@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'João Guimarães Rosa',
            'phone' => ('53981115566'),
            'email' => 'joaogr@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'José Lins do Rego',
            'phone' => ('53981115566'),
            'email' => 'joselins@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Lobo da Costa',
            'phone' => ('53981115566'),
            'email' => 'lobo@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Mal. Ignácio de F. Rolim',
            'phone' => ('53981115566'),
            'email' => 'irolim@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Manuel Bandeira',
            'phone' => ('53981115566'),
            'email' => 'manuelb@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Marília Poliesti',
            'phone' => ('53981115566'),
            'email' => 'poliesti@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Mário Quintana',
            'phone' => ('53981115566'),
            'email' => 'marioq@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Centro',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Monteiro Lobato',
            'phone' => ('53981115566'),
            'email' => 'monteiro@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'São Gonçalo',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Nelson Abott de Freitas',
            'phone' => ('53981115566'),
            'email' => 'nelsonaf@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'São Gonçalo',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Nestor Rodrigues',
            'phone' => ('53981115566'),
            'email' => 'nestorr@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'São Gonçalo',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Osvald de Andrade',
            'phone' => ('53981115566'),
            'email' => 'osvalda@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Laranjal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Paulo Freire',
            'phone' => ('53981115566'),
            'email' => 'paulof@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Laranjal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Ruth Blank',
            'phone' => ('53981115566'),
            'email' => 'ruth@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Laranjal',
        ]);
        
        $user->assignRole('school');

        $user = User::create([
            'name' => 'Vinícius de Moraes',
            'phone' => ('53981115566'),
            'email' => 'vinimoraes@gmail.com',
            'password' => Hash::make('password'),
            'address' =>'Rua Deodoro, 740',
            'neighborhood' => 'Laranjal',
        ]);
        
        $user->assignRole('school');
    }
}
