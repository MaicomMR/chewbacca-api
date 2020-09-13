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
            'name' => 'Alunas Grávidas',
            'slug' => Str::slug('Alunas Grávidas'),
            'media_link' => 'https://www.youtube.com/watch?v=a1Ck7NM_euY',
            'description' => 'De acordo com a Organização Mundial de Saúde (OMS), gravidez na adolescência é considerada a que ocorre entre os 10 e 20 anos. Apontada como uma gestação de alto risco decorrente das preocupações que traz à mãe e ao recém nascido, a gravidez nesta faixa etária pode acarretar problemas sociais e biológicos.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Assaltos',
            'slug' => Str::slug('Assaltos'),
            'media_link' => 'https://www.youtube.com/watch?v=TCHdjOhDmq4',
            'description' => 'Ataque súbito a alguém ou algo, em geral utilizando a força ou ameaças e com o objetivo de roubar, podendo ser utilizado arma branca ou de fogo para coerção. ',
        ]);

        DB::table('violences')->insert([
            'name' => 'Bullying',
            'slug' => Str::slug('Bullying'),
            'description' => 'A prática do bullying consiste em um conjunto de violências que se repetem por algum período. Geralmente são agressões verbais, físicas e psicológicas que humilham, intimidam e traumatizam a vítima. A palavra bullying designa um quadro de agressões contínuas, repetitivas, com características de perseguição do agressor contra a vítima, não podendo caracterizar uma agressão isolada, resultante de uma briga.',
            'media_link' => 'https://www.youtube.com/watch?v=tHRZRaZ94ic'
        ]);

        DB::table('violences')->insert([
            'name' => 'CyberBullying',
            'slug' => Str::slug('CyberBullying'),
            'media_link' => 'https://www.youtube.com/watch?v=OBe1-nenr64',
            'description' => 'Conjunto de violências que acontecem no espaço virtual como rede sociais ou mensagens com imagens e comentários depreciativos. Conflitos que tendem a  se alastram rapidamente e tornam o bullying ainda mais perverso. Como o espaço virtual é ilimitado, o poder de agressão se amplia e a vítima se sente acuada mesmo fora da escola.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Homofobia',
            'slug' => Str::slug('Homofobia'),
            'description' => 'Série de atitudes e sentimentos negativos em relação a pessoas homossexuais, bissexuais e, em alguns casos, contra transgêneros e pessoas intersexuais. As definições para o termo referem-se variavelmente a antipatia, desprezo, preconceito, aversão e medo irracional. A homofobia é observada como um comportamento crítico e hostil, assim como a discriminação e a violência com base na percepção de que todo tipo de orientação sexual não-heterossexual é negativa',
            'media_link' => 'https://www.youtube.com/watch?v=feo1ZzJCQ8w'
        ]);

        DB::table('violences')->insert([
            'name' => 'Incidências de chamada policiais GM/BM/CT',
            'slug' => Str::slug('Incidências de chamada policiais GM/BM/CT'),
            'media_link' => 'https://www.youtube.com/watch?v=xhQEjjCF-7s',
            'description' => 'Quando é necessário chamar órgão policial para prevenir ou conter uma situação de risco na unidade escolar.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Posse ou Tráfico de drogas',
            'slug' => Str::slug('Posse ou Tráfico de drogas'),
            'media_link' => 'https://www.youtube.com/watch?v=kbCUAo_dlQI',
            'description' => 'A lei 11.343/2006, que define os crimes relacionados à prática do tráfico ilícito de drogas, em seu artigo 33, prevê que dentre as diversas condutas que caracterizam o crime de tráfico está o ato de entregar a consumo ou fornecer drogas, mesmo que seja de graça. 
            São caracterizados como crime os atos de: Importar, exportar, remeter, preparar, produzir, fabricar, adquirir, vender, expor à venda, oferecer, ter em depósito, transportar, trazer consigo, guardar, prescrever, ministrar, entregar a consumo ou fornecer drogas, ainda que gratuitamente.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Racismo',
            'slug' => Str::slug('Racismo'),
            'media_link' => 'https://www.youtube.com/watch?v=Ia3NrSoTSXk',
            'description' => 'Racismo consiste no preconceito e na discriminação com base em percepções sociais baseadas em diferenças biológicas entre os povos.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Violência Digital',
            'slug' => Str::slug('Violência Digital'),
            'media_link' => 'https://www.youtube.com/watch?v=Zo3CiA5bhpI',
            'description' => 'Violência digital consiste em ações que coloquem a moral ou reputação da pessoa em risco no âmbito virtual como divulgação de fotos e/ou informações pessoais sem consentimento.  Sequestro da vida digital, linchamento, inscrição em sites de prostituição e/ou pornografia.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Violência Física',
            'slug' => Str::slug('Violência Física'),
            'media_link' => 'https://www.youtube.com/watch?v=I0E3T899yJs',
            'description' => 'Também denominada sevícia física, maus-tratos físicos ou abuso físico. São atos violentos, nos quais se fez uso da força física de forma intencional, não-acidental, com o objetivo de ferir, lesar, provocar dor e sofrimento ou destruir a pessoa, deixando, ou não, marcas evidentes no seu corpo. Ela pode se manifestar de várias formas, como tapas, beliscões, chutes, torções, empurrões, arremesso de objetos, estrangulamentos, queimaduras, perfurações, mutilações, dentre outras. A violência física também ocorre no caso de ferimentos por arma de fogo (incluindo as situações de bala perdida) ou ferimentos por arma branca.',
        ]);

        DB::table('violences')->insert([
            'name' => 'Violência Verbal',
            'slug' => Str::slug('Violência Verbal'),
            'media_link' => 'https://www.youtube.com/watch?v=eF0-IuocqXE',
            'description' => 'A violência verbal é um comportamento agressivo, caracterizado por palavras danosas, que têm a intenção de ridicularizar, humilhar, manipular e/ou ameaçar. Assim como acontece com a violência física, este tipo de agressão afeta significativamente a vítima, causando danos psicológicos brutais e irreparáveis. A violência verbal anda lado a lado com a violência psicológica, já que a segunda é uma consequência da primeira.',
        ]);
    }
}
