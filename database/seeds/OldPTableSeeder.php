<?php
use App\Product;
use Illuminate\Database\Seeder;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Camisa PSG 19/20',
            'slug' => 'FRA.PSG.031920',
            'details' => 'Uniforme III do PSG da França',
            'price' => 10000,
            'description' => 'Com um design clássico sem deixar de ser moderna, essa terceira Camisa do PSG chega na cor branca e com grafismos texturizados, uma inspiração nas camisas de futebol dos anos 90, em especial, no uniforme usado pelo clube na temporada de 1989-1990, para vestir os boleiros com toda a tradição do clube francês!',
        ]);
        Product::create([
            'name' => 'Camisa Juventus 19/20',
            'slug' => 'ITA.JUV.011920',
            'details' => 'Uniforme I da Juventus da Itália',
            'price' => 10000,
            'description' => 'O atual campeão Italiano está de farda nova! Para marcar uma nova era na história da Juve, esse manto se destaca pelo meio a meio em preto em branco e uma faixa fina centralizada na cor rosa, cor já usada nos primeiros anos do clube.',
        ]);
        Product::create([
            'name' => 'Camisa Tottenham 19/20',
            'slug' => 'ING.TOT.031920',
            'details' => 'Uniforme III do Tottenham da Inglaterra',
            'price' => 10000,
            'description' => 'Com um design retrô, o terceiro manto do Tottenham Hotspur é um resgate das camisas de futebol dos anos 90. A gola polo dá um toque de classe à peça, e os grafismos texturizados são inspirados na fachada do novo estádio dos Spurs, trazendo ainda mais “peso” à camisa do time inglês.',
        ]);
        Product::create([
            'name' => 'Camisa Barcelona 19/20',
            'slug' => 'ESP.BAR.011920',
            'details' => 'Uniforme I do Barcelona da Espanha',
            'price' => 10000,
            'description' => 'Com um design quadriculado, o manto titular do Barcelona é inspirado na estrutura urbana do bairro espanhol de Eixample, e te acompanha na torcida para fazer seu coração Barcelonista bater mais forte.',
        ]);
        Product::create([
            'name' => 'Camisa Chelsea 19/20',
            'slug' => 'ING.CHE.011920',
            'details' => 'Uniforme I do Chelsea da Inglaterra',
            'price' => 10000,
            'description' => 'Com um tom de azul mais intenso, essa Camisa titular do Chelsea conta com grafismos estampados, que simbolizam partes do Estádio Stamford Bridge, palco de grandes glórias dos Blues. O maior Orgulho de Londres está pronto para uma temporada vitoriosa!',
        ]);
        Product::create([
            'name' => 'Camisa Real Madrid 19/20',
            'slug' => 'ESP.RMA.011920',
            'details' => 'Uniforme I do Real Madrid da Espanha',
            'price' => 10000,
            'description' => 'Na clássica cor branca, esse manto do Real se destaca pelos detalhes em dourado nas mangas e gola, e as Três Listras nos ombros, bem no estilo Adidas de torcer. Exiba seu orgulho pela gloriosa história Real!',
        ]);
        Product::create([
            'name' => 'Camisa Ajax 19/20',
            'slug' => 'EUR.AJA.021920',
            'details' => 'Uniforme II do Ajax da Holanda',
            'price' => 10000,
            'description' => 'Esta camisa do Ajax honra os mestres holandeses que dominaram o futebol internacional no fim da década de 80. Ela é produzida com um tecido que remove suor para manter seu corpo seco e confortável!',
        ]);
        Product::create([
            'name' => 'Camisa Bayern de Munique 19/20',
            'slug' => 'ALE.BAY.011920',
            'details' => 'Uniforme I do Bayern de Munique da Alemanha',
            'price' => 10000,
            'description' => 'Vista seu novo manto dos Bávaros! Moderna e impondo grandiosidade, essa camisa do Bayern possui grafismos inspirados na cobertura do Allianz Arena, casa e palco de grandes vitórias do time alemão.',
        ]);
        Product::create([
            'name' => 'Camisa Atlético de Madrid 19/20',
            'slug' => 'ESP.ATM.021920',
            'details' => 'Uniforme II do Atlético Madrid da Espanha',
            'price' => 10000,
            'description' => 'Todo Colchonero vai vibrar ainda mais com a nova Camisa do Atlético de Madrid! Preta e com detalhes em vermelho, esse manto reserva do Atleti veste o torcedor com a força e a garra do clube espanhol.',
        ]);
    }
}
