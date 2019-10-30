<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Camisa PSG 19/20',
                'slug' => 'FRAPSG031920',
                'details' => 'Uniforme III do PSG da França',
                'price' => 100,
                'description' => 'Com um design clássico sem deixar de ser moderna, essa terceira Camisa do PSG chega na cor branca e com grafismos texturizados, uma inspiração nas camisas de futebol dos anos 90, em especial, no uniforme usado pelo clube na temporada de 1989-1990, para vestir os boleiros com toda a tradição do clube francês!',
                'created_at' => '2019-10-18 14:27:38',
                'updated_at' => '2019-10-18 14:27:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Camisa Juventus 19/20',
                'slug' => 'ITAJUV011920',
                'details' => 'Uniforme I da Juventus da Itália',
                'price' => 100,
                'description' => 'O atual campeão Italiano está de farda nova! Para marcar uma nova era na história da Juve, esse manto se destaca pelo meio a meio em preto em branco e uma faixa fina centralizada na cor rosa, cor já usada nos primeiros anos do clube.',
                'created_at' => '2019-10-18 14:27:38',
                'updated_at' => '2019-10-18 14:27:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Camisa Tottenham 19/20',
                'slug' => 'INGTOT031920',
                'details' => 'Uniforme III do Tottenham da Inglaterra',
                'price' => 100,
                'description' => 'Com um design retrô, o terceiro manto do Tottenham Hotspur é um resgate das camisas de futebol dos anos 90. A gola polo dá um toque de classe à peça, e os grafismos texturizados são inspirados na fachada do novo estádio dos Spurs, trazendo ainda mais “peso” à camisa do time inglês.',
                'created_at' => '2019-10-18 14:27:38',
                'updated_at' => '2019-10-18 14:27:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Camisa Barcelona 19/20',
                'slug' => 'ESPBAR011920',
                'details' => 'Uniforme I do Barcelona da Espanha',
                'price' => 100,
                'description' => 'Com um design quadriculado, o manto titular do Barcelona é inspirado na estrutura urbana do bairro espanhol de Eixample, e te acompanha na torcida para fazer seu coração Barcelonista bater mais forte.',
                'created_at' => '2019-10-18 14:27:38',
                'updated_at' => '2019-10-18 14:27:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Camisa Chelsea 19/20',
                'slug' => 'INGCHE011920',
                'details' => 'Uniforme I do Chelsea da Inglaterra',
                'price' => 100,
                'description' => 'Com um tom de azul mais intenso, essa Camisa titular do Chelsea conta com grafismos estampados, que simbolizam partes do Estádio Stamford Bridge, palco de grandes glórias dos Blues. O maior Orgulho de Londres está pronto para uma temporada vitoriosa!',
                'created_at' => '2019-10-18 14:27:39',
                'updated_at' => '2019-10-18 14:27:39',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Camisa Real Madrid 19/20',
                'slug' => 'ESPRMA011920',
                'details' => 'Uniforme I do Real Madrid da Espanha',
                'price' => 100,
                'description' => 'Na clássica cor branca, esse manto do Real se destaca pelos detalhes em dourado nas mangas e gola, e as Três Listras nos ombros, bem no estilo Adidas de torcer. Exiba seu orgulho pela gloriosa história Real!',
                'created_at' => '2019-10-18 14:27:39',
                'updated_at' => '2019-10-18 14:27:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Camisa Ajax 19/20',
                'slug' => 'EURAJA021920',
                'details' => 'Uniforme II do Ajax da Holanda',
                'price' => 100,
                'description' => 'Esta camisa do Ajax honra os mestres holandeses que dominaram o futebol internacional no fim da década de 80. Ela é produzida com um tecido que remove suor para manter seu corpo seco e confortável!',
                'created_at' => '2019-10-18 14:27:39',
                'updated_at' => '2019-10-18 14:27:39',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Camisa Bayern de Munique 19/20',
                'slug' => 'ALEBAY011920',
                'details' => 'Uniforme I do Bayern de Munique da Alemanha',
                'price' => 100,
                'description' => 'Vista seu novo manto dos Bávaros! Moderna e impondo grandiosidade, essa camisa do Bayern possui grafismos inspirados na cobertura do Allianz Arena, casa e palco de grandes vitórias do time alemão.',
                'created_at' => '2019-10-18 14:27:39',
                'updated_at' => '2019-10-18 14:27:39',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Camisa Atlético de Madrid 19/20',
                'slug' => 'ESPATM021920',
                'details' => 'Uniforme II do Atlético Madrid da Espanha',
                'price' => 100,
                'description' => 'Todo Colchonero vai vibrar ainda mais com a nova Camisa do Atlético de Madrid! Preta e com detalhes em vermelho, esse manto reserva do Atleti veste o torcedor com a força e a garra do clube espanhol.',
                'created_at' => '2019-10-18 14:27:39',
                'updated_at' => '2019-10-18 14:27:39',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Camisa São Paulo 19/20',
                'slug' => 'BRASAO011920',
                'details' => 'Uniforme I do Tricolor Paulista',
                'price' => 100,
                'description' => 'Entre os grandes, és o primeiro! A nova Camisa do São Paulo I 19/20 que “costura gerações” para vestir a Torcida Tricolor com garra e tradição. Compondo o uniforme titular, a nova Camisa Branca do São Paulo está com gola V, o escudo centralizado no peito entre as três faixas, e listras tricolores nas laterais.',
                'created_at' => '2019-10-18 14:48:00',
                'updated_at' => '2019-10-18 14:48:00',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Camisa Flamengo 19/20',
                'slug' => 'BRAFLA011920',
                'details' => 'Uniforme I do Rubro Negro Carioca',
                'price' => 100,
                'description' => 'A paixão pelo Mengão é única, exiba a sua com a nova Camisa do Flamengo I 19/20 com Patrocínio Torcedor Adidas! Esse manto titular do Flamengo conta com faixas mais finas com efeito 3D e o destaque para o patrocínio atual do Maior do Brasil. Garanta a sua Camisa do Flamengo 2019!',
                'created_at' => '2019-10-18 14:48:00',
                'updated_at' => '2019-10-18 14:48:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Camisa Corinthians 19/20',
                'slug' => 'BRACOR021920',
                'details' => 'Uniforme II do Timão',
                'price' => 100,
                'description' => 'Corinthiano, maloqueiro e sofredor! Em 2019 uma das maiores torcidas organizadas do Corinthians completa 50 anos. E para celebrar esta marca histórica, o Timão lança a Camisa Corinthians II 19/20 Torcedor Nike Masculina. Este manto é totalmente preto com detalhes brancos nas mangas e na gola, inspirado na peça que a torcida veste nas arquibancadas.',
                'created_at' => '2019-10-18 15:00:00',
                'updated_at' => '2019-10-18 15:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Camisa Palmeiras 19/20',
                'slug' => 'BRASEP031920',
                'details' => 'Uniforme III do Verdão',
                'price' => 100,
                'description' => 'Vista as glórias do Palestra com a nova Camisa do Palmeiras III 19/20 s/nº Torcedor Puma. Na cor verde água e resgatando o lendário escudo do Palestra Itália, essa terceira Camisa do Palmeiras comemora os 105 anos de clube e simboliza a grandeza de sua historia. Garanta a sua nova Camisa do Verdão!',
                'created_at' => '2019-10-18 15:00:00',
                'updated_at' => '2019-10-18 15:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Camisa Borussia 19/20',
                'slug' => 'ALEBOR011920',
                'details' => 'Uniforme I do Borussia da Alemanha',
                'price' => 100,
                'description' => 'Seu coração Aurinegro vai bater mais forte com a nova Camisa do Borussia Dortmund I 19/20 Torcedor Puma! Na tradicional cor amarela, essa Camisa titular do Borussia se destaca pelos grafismos na região dos ombros, para turbinar o visual do torcedor boleiro. A parte de dentro da gola traz selo com menções comemorativas aos 110 anos de história do clube alemão.',
                'created_at' => '2019-10-18 15:02:00',
                'updated_at' => '2019-10-18 15:02:00',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Camisa Liverpool 19/20',
                'slug' => 'INGLIV011920',
                'details' => 'Uniforme I do Liverpool da Inglaterra',
                'price' => 100,
                'description' => 'Torça pelos Reds com a camiseta que faz uma homenagem ao ano de 1978, quando a equipe conquistou o décimo primeiro título do Campeonato Inglês, perfeita para o torcedor vestir seu amor pela equipe no dia a dia. Possui design inspirado no uniforme utilizado na época, sendo predominantemente vermelha.',
                'created_at' => '2019-10-18 15:02:00',
                'updated_at' => '2019-10-18 15:02:00',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Camisa Internazionale 19/20',
                'slug' => 'ITAINT021920',
                'details' => 'Uniforme II da Inter de Milão',
                'price' => 100,
                'description' => 'La Beneamata merece a sua torcida com a nova Camisa da Inter de Milão II 19/20 Torcedor Nike! Esse manto reserva da Inter, chega na cor verde no tom menta com gola V e detalhes em dourado. A parte interna da gola confere estampa de uma cruz com o nome “Internazionale”. Garanta a sua!',
                'created_at' => '2019-10-18 15:10:00',
                'updated_at' => '2019-10-18 15:10:00',
            ),
        ));

        $product = Product::find(1);
        $product->categories()->attach(1);
        $product = Product::find(2);
        $product->categories()->attach(1);
        $product = Product::find(3);
        $product->categories()->attach(1);
        $product = Product::find(4);
        $product->categories()->attach(1);
        $product = Product::find(5);
        $product->categories()->attach(1);
        $product = Product::find(6);
        $product->categories()->attach(1);
        $product = Product::find(7);
        $product->categories()->attach(1);
        $product = Product::find(8);
        $product->categories()->attach(1);
        $product = Product::find(9);
        $product->categories()->attach(1);
        $product = Product::find(10);
        $product->categories()->attach(1);
        $product = Product::find(11);
        $product->categories()->attach(1);
        $product = Product::find(12);
        $product->categories()->attach(1);
        $product = Product::find(13);
        $product->categories()->attach(1);
        $product = Product::find(14);
        $product->categories()->attach(1);
        $product = Product::find(15);
        $product->categories()->attach(1);
        $product = Product::find(16);
        $product->categories()->attach(1);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 17,
                'name' => 'Tênis Adidas NMD',
                'slug' => 'TENADINMD001',
                'details' => 'Calçado moderno com cabedal de malha.',
                'price' => 400,
                'description' => 'Otimizado e moderno, este NMD combina o mundo da corrida dos anos 80 com elementos de estilo da moda outdoor. O cabedal de malha envolve os pés e é sustentado por uma entressola responsiva e amortecida.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            1 => 
            array (
                'id' => 18,
                'name' => 'Tênis Fila Speed Trail',
                'slug' => 'TENFILSPT001',
                'details' => 'Calçado em couro e perfil alto.',
                'price' => 300,
                'description' => 'Fundada pelos irmãos Fila em 1911 na cidade de Biela, nos alpes italianos, a intenção original da marca era criar roupas de qualidade para pequenas cidades da região. Ao longo do tempo, a marca tornou-se mais próxima do esporte, com foco no desenvolvimento de calçado, além de acompanhar, incentivar e ajudar a escrever a história de esportes como tennis, automobilismo, running e basquete.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            2 => 
            array (
                'id' => 19,
                'name' => 'Tênis Mizuno Wave 6',
                'slug' => 'TENMIZWAV001',
                'details' => 'Calçado indicado para corrida.',
                'price' => 400,
                'description' => 'Estiloso e com tecnologias de ponta o Tênis Mizuno Wave Prophecy 8 Masculino em sua mais nova edição proporciona ainda mais amortecimento, maciez e elegancia para diversas ocasiões. Com otima textura seu amortecimento esta ainda mais dinâmico tornando suas atividades e experiências sem igual.  Seu cabedal produzido envolto com “AIRmesh”, tecido de tramas abertas que proporciona maior ventilação, garantindo o máximo de conforto e evitando odores. ',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            3 => 
            array (
                'id' => 20,
                'name' => 'Tênis New Balance 574',
                'slug' => 'TENNWB574001',
                'details' => 'Solado em EVA e borracha, Cabedal Sintético e Poliamida.',
                'price' => 350,
                'description' => 'O Tênis New Balance 574 sport v2 possui o design inspirado na estética chunky marcante dos anos 90, em uma versão atualizada da silhueta anterior. Com tecnologia Fresh Foam mais atual, o modelo é uma silhueta moderna para uso casual com o conforto e a tecnologia de um tênis performance. Em cores neutras, ele representa história e versatilidade.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            4 => 
            array (
                'id' => 21,
                'name' => 'Tênis Nike Air Max 90',
                'slug' => 'TENNIKAMX001',
                'details' => 'Material sintético para durabilidade.',
                'price' => 400,
                'description' => 'O Tênis Masculino Nike Air Max 90 Essential mantém as linhas de design clássicas do original de 1990 e o amortecimento que o tornou famoso, material sintético para durabilidade e conforto.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            5 => 
            array (
                'id' => 22,
                'name' => 'Tênis Nike Air Vapormax',
                'slug' => 'TENNIKAVM001',
                'details' => 'A tecnologia proporciona maciez e leveza.',
                'price' => 500,
                'description' => 'O Nike Air VaporMax Flyknit 3 apresenta linhas fluidas em 2 tons de construção Flyknit respirável e elástica para um estilo único, pronto para a rua. Tecnologia VaporMax Air revolucionária mantém a elasticidade em seu passo com amortecimento dos dedos ao calcanhar.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            6 => 
            array (
                'id' => 23,
                'name' => 'Tenis Nike Shox 12 Molas',
                'slug' => 'TENNIKASH001',
                'details' => 'Colunas que auxiliam na absorção de impactos.',
                'price' => 300,
                'description' => 'Referência no mercado esportivo e casual, a Nike é sinônimo de conforto, estilo e praticidade. Ao longo da história, a marca desenvolveu modelos que se tornaram verdadeiros ícones; um deles é o clássico e atemporal Nike Shox. Com um sistema único de amortecimento o tênis proporciona uma pisada flexível e anatômica.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            7 => 
            array (
                'id' => 24,
                'name' => 'Tênis Nike Air Max 97 Masculino',
                'slug' => 'TENNIKAMX002',
                'details' => 'Cabedal em couro sintético e tecido.',
                'price' => 400,
                'description' => 'O Tênis  Masculino Nike Air Max 97 revisita o original icônico com linhas de design modernas e amortecimento super leve. Referência no mercado esportivo e casual, a Nike é sinônimo de conforto, estilo e praticidade.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            8 => 
            array (
                'id' => 25,
                'name' => 'Tênis Nike Air VaporMax Plus',
                'slug' => 'TENNIKAVM002',
                'details' => 'Cabedal moldado de compressão para um ajuste seguro.',
                'price' => 500,
                'description' => 'Com um novo sistema de amortecimento, o Tênis Masculino Nike Air VaporMax  Plus proporciona uma passada leve e resiliente para você sentir que está desafiando a gravidade, ao passo que o cabedal moldado proporciona um ajuste firme e confortável.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
            9 => 
            array (
                'id' => 26,
                'name' => 'Tênis Vans Old Skool',
                'slug' => 'TENVANOSK001',
                'details' => 'Cabedal resistente de camurça e lona.',
                'price' => 300,
                'description' => 'O Old Skool, clássico tênis de skate da Vans e o primeiro a apresentar a icônica lista lateral, é um tênis de cano baixo com cadarços, cabedal resistente de camurça e lona, biqueiras reforçadas para suportar o desgaste constante, borda acolchoada para dar suporte e flexibilidade e a sola de borracha waffle original da marca.',
                'created_at' => '2019-10-26 03:00:00',
                'updated_at' => '2019-10-26 03:00:00',
            ),
        ));

        $product = Product::find(17);
        $product->categories()->attach(9);
        $product = Product::find(18);
        $product->categories()->attach(9);
        $product = Product::find(19);
        $product->categories()->attach(9);
        $product = Product::find(20);
        $product->categories()->attach(9);
        $product = Product::find(21);
        $product->categories()->attach(9);
        $product = Product::find(22);
        $product->categories()->attach(9);
        $product = Product::find(23);
        $product->categories()->attach(9);
        $product = Product::find(24);
        $product->categories()->attach(9);
        $product = Product::find(25);
        $product->categories()->attach(9);
        $product = Product::find(26);
        $product->categories()->attach(9);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 27,
                'name' => 'Camiseta Surf Adidas 001',
                'slug' => 'SHISURADI001',
                'details' => 'Logo original colorido.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            1 => 
            array (
                'id' => 28,
                'name' => 'Camiseta Surf Adidas 002',
                'slug' => 'SHISURADI002',
                'details' => 'Logo psicodélico.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            2 => 
            array (
                'id' => 29,
                'name' => 'Camiseta Surf Nike 001',
                'slug' => 'SHISURNIK001',
                'details' => 'Logo sobre o por do sol.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            3 => 
            array (
                'id' => 30,
                'name' => 'Camiseta Surf Nike 002',
                'slug' => 'SHISURNIK002',
                'details' => 'Logo sobre listras.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            4 => 
            array (
                'id' => 31,
                'name' => 'Camiseta Surf Oakley 001',
                'slug' => 'SHISUROAK001',
                'details' => 'Estampa com logo centralizado.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            5 => 
            array (
                'id' => 32,
                'name' => 'Camiseta Surf Oakley 002',
                'slug' => 'SHISUROAK002',
                'details' => 'Estampa com logo centralizado.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            6 => 
            array (
                'id' => 33,
                'name' => 'Camiseta Surf Oakley 003',
                'slug' => 'SHISUROAK003',
                'details' => 'Estampa com logo centralizado.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            7 => 
            array (
                'id' => 34,
                'name' => 'Camiseta Surf Quiksilver 001',
                'slug' => 'SHISURQUI001',
                'details' => 'Logo central com mangas em outro tom.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            8 => 
            array (
                'id' => 35,
                'name' => 'Camiseta Surf Quiksilver 002',
                'slug' => 'SHISURQUI002',
                'details' => 'Logo e degrade inferior.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            9 => 
            array (
                'id' => 36,
                'name' => 'Camiseta Surf Quiksilver 003',
                'slug' => 'SHISURQUI003',
                'details' => 'Logo clássico central.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            10 => 
            array (
                'id' => 37,
                'name' => 'Camiseta Surf Tommy Hilfiger 001',
                'slug' => 'SHISURTMH001',
                'details' => 'Logo Centralizado estilo pintura.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            11 => 
            array (
                'id' => 38,
                'name' => 'Camiseta Surf Tommy Hilfiger 002',
                'slug' => 'SHISURTMH002',
                'details' => 'Logo em forma de Faixa horizontal.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de algodão, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            12 => 
            array (
                'id' => 39,
                'name' => 'Camisetas Lacoste Listradas 001',
                'slug' => 'SHISURLAC001',
                'details' => 'Listas e gola polo.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de peruana, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            13 => 
            array (
                'id' => 40,
                'name' => 'Camisetas Lacoste Listradas 002',
                'slug' => 'SHISURLAC002',
                'details' => 'Listas e gola careca.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de peruana, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
            14 => 
            array (
                'id' => 41,
                'name' => 'Camisetas Lacoste Listradas 003',
                'slug' => 'SHISURLAC003',
                'details' => 'Listas e gola polo.',
                'price' => 50,
                'description' => 'A Camiseta foi confeccionada em malha de peruana, ideal para o look confortável e cheio de estilo! A camiseta de manga curta tem estampa com inscrição da marca.',
                'created_at' => '2019-10-26 04:00:00',
                'updated_at' => '2019-10-26 04:00:00',
            ),
        ));

        $product = Product::find(27);
        $product->categories()->attach(2);
        $product = Product::find(28);
        $product->categories()->attach(2);
        $product = Product::find(29);
        $product->categories()->attach(2);
        $product = Product::find(30);
        $product->categories()->attach(2);
        $product = Product::find(31);
        $product->categories()->attach(2);
        $product = Product::find(32);
        $product->categories()->attach(2);
        $product = Product::find(33);
        $product->categories()->attach(2);
        $product = Product::find(34);
        $product->categories()->attach(2);
        $product = Product::find(35);
        $product->categories()->attach(2);
        $product = Product::find(36);
        $product->categories()->attach(2);
        $product = Product::find(37);
        $product->categories()->attach(2);
        $product = Product::find(38);
        $product->categories()->attach(2);
        $product = Product::find(39);
        $product->categories()->attach(2);
        $product = Product::find(40);
        $product->categories()->attach(2);
        $product = Product::find(41);
        $product->categories()->attach(2);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 42,
                'name' => 'Perfume Dolce & Gabbana',
                'slug' => 'PERIMPDEG001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            1 => 
            array (
                'id' => 43,
                'name' => 'Perfume Fantasy B.Spears',
                'slug' => 'PERIMPFBS001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            2 => 
            array (
                'id' => 44,
                'name' => 'Perfume Ferrari',
                'slug' => 'PERIMPFER001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            3 => 
            array (
                'id' => 45,
                'name' => 'Perfume Ferrari Black',
                'slug' => 'PERIMPFER002',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            4 => 
            array (
                'id' => 46,
                'name' => 'Perfume Lacoste',
                'slug' => 'PERIMPLAC001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            5 => 
            array (
                'id' => 47,
                'name' => 'Perfume Lady Million',
                'slug' => 'PERIMPLDM001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            6 => 
            array (
                'id' => 48,
                'name' => 'Perfume 212 Men',
                'slug' => 'PERIMP212001',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            7 => 
            array (
                'id' => 49,
                'name' => 'Perfume 212 NYC',
                'slug' => 'PERIMP212002',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
            8 => 
            array (
                'id' => 50,
                'name' => 'Perfume 212 Vip Rosé',
                'slug' => 'PERIMP212003',
                'details' => 'Fragrância importada',
                'price' => 50,
                'description' => 'Quanto à fixação e durabilidade, é uma fragrância leve, mas marcante com complexidade enigmática e vigor. É ideal para quem gosta de sutilezas e uma fragrância duradoura e agradável ao decorrer do dia. Um item de perfumaria e cosméticos essencial para ter e estar sempre perfumado.',
                'created_at' => '2019-10-26 05:00:00',
                'updated_at' => '2019-10-26 05:00:00',
            ),
        ));

        $product = Product::find(42);
        $product->categories()->attach(8);
        $product = Product::find(43);
        $product->categories()->attach(8);
        $product = Product::find(44);
        $product->categories()->attach(8);
        $product = Product::find(45);
        $product->categories()->attach(8);
        $product = Product::find(46);
        $product->categories()->attach(8);
        $product = Product::find(47);
        $product->categories()->attach(8);
        $product = Product::find(48);
        $product->categories()->attach(8);
        $product = Product::find(49);
        $product->categories()->attach(8);
        $product = Product::find(50);
        $product->categories()->attach(8);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 51,
                'name' => 'Conjunto Barcelona',
                'slug' => 'INVCONBAR001',
                'details' => 'Conjunto Agasalho Detalhe Bordado',
                'price' => 250,
                'description' => 'Com o Conjunto agasalho você mantém o estilo na academia também nos dias frios. Esse conjunto traz uma jaqueta e uma calça, ambos com logo dos times e com os designs tradicionais da marca.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            1 => 
            array (
                'id' => 52,
                'name' => 'Conjunto Bayern de Munique',
                'slug' => 'INVCONBAY001',
                'details' => 'Conjunto Agasalho Detalhe Bordado',
                'price' => 250,
                'description' => 'Com o Conjunto agasalho você mantém o estilo na academia também nos dias frios. Esse conjunto traz uma jaqueta e uma calça, ambos com logo dos times e com os designs tradicionais da marca.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            2 => 
            array (
                'id' => 53,
                'name' => 'Conjunto Real Madrid',
                'slug' => 'INVCONRMA001',
                'details' => 'Conjunto Agasalho Detalhe Bordado',
                'price' => 250,
                'description' => 'Com o Conjunto agasalho você mantém o estilo na academia também nos dias frios. Esse conjunto traz uma jaqueta e uma calça, ambos com logo dos times e com os designs tradicionais da marca.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            3 => 
            array (
                'id' => 54,
                'name' => 'Corta Vento BMW',
                'slug' => 'INVCTVBMW001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            4 => 
            array (
                'id' => 55,
                'name' => 'Corta Vento Ferrari',
                'slug' => 'INVCTVFER001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            5 => 
            array (
                'id' => 56,
                'name' => 'Corta Vento Mercedes',
                'slug' => 'INVCTVMER001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            6 => 
            array (
                'id' => 57,
                'name' => 'Corta Vento RB Racing',
                'slug' => 'INVCTVRBR001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            7 => 
            array (
                'id' => 58,
                'name' => 'Corta Vento Corinthians',
                'slug' => 'INVCTVCOR001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            8 => 
            array (
                'id' => 59,
                'name' => 'Corta Vento Flamengo',
                'slug' => 'INVCTVFLA001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            9 => 
            array (
                'id' => 60,
                'name' => 'Corta Vento Palmeiras',
                'slug' => 'INVCTVSEP001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            10 => 
            array (
                'id' => 61,
                'name' => 'Corta Vento Liverpool',
                'slug' => 'INVCTVLIV001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            11 => 
            array (
                'id' => 62,
                'name' => 'Corta Vento PSG',
                'slug' => 'INVCTVPSG001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            12 => 
            array (
                'id' => 63,
                'name' => 'Corta Vento Nike',
                'slug' => 'INVCTVNIK001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 200,
                'description' => 'Mantenha-se comprometido com seus treinos de dias úmidos nesta corta vento. O acabamento impermeável ajuda você a se manter seco e um bolso seguro antissuor oferece espaço para armazenar itens pequenos. Os cotovelos pré-moldados são desenhados para que se adequem aos movimentos de quem corre.A modelagem normal veste rente ao corpo, oferecendo um caimento semijusto que acompanha o formato do corpo Barra traseira alongada.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
            13 => 
            array (
                'id' => 64,
                'name' => 'Moletom Oakley Capuz',
                'slug' => 'INVMOLOAK001',
                'details' => 'Indicado para o Dia a Dia',
                'price' => 150,
                'description' => 'Moletom canguru em malha 360g com capuz com cordão para ajuste. Características Principais: Composição: 56% Algodão e 44% Poliéster. Garantia conta defeito de fabricação.',
                'created_at' => '2019-10-26 04:30:00',
                'updated_at' => '2019-10-26 04:30:00',
            ),
        ));

        $product = Product::find(51);
        $product->categories()->attach(7);
        $product = Product::find(52);
        $product->categories()->attach(7);
        $product = Product::find(53);
        $product->categories()->attach(7);
        $product = Product::find(54);
        $product->categories()->attach(7);
        $product = Product::find(55);
        $product->categories()->attach(7);
        $product = Product::find(56);
        $product->categories()->attach(7);
        $product = Product::find(57);
        $product->categories()->attach(7);
        $product = Product::find(58);
        $product->categories()->attach(7);
        $product = Product::find(59);
        $product->categories()->attach(7);
        $product = Product::find(60);
        $product->categories()->attach(7);
        $product = Product::find(61);
        $product->categories()->attach(7);
        $product = Product::find(62);
        $product->categories()->attach(7);
        $product = Product::find(63);
        $product->categories()->attach(7);
        $product = Product::find(64);
        $product->categories()->attach(7);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 65,
                'name' => 'Body Alcinha Reta',
                'slug' => 'FEMBODALR001',
                'details' => 'Tamanho Unico! Preto, Vermelho, Rosa, Pink, e Branco.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            1 => 
            array (
                'id' => 66,
                'name' => 'Jaqueta Parka Rose',
                'slug' => 'FEMJAQPAR001',
                'details' => 'Disponível em mais cores.',
                'price' => 100,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            2 => 
            array (
                'id' => 67,
                'name' => 'Jaqueta Forrada Curta',
                'slug' => 'FEMJAQFOR001',
                'details' => 'Disponível em várias cores.',
                'price' => 70,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            3 => 
            array (
                'id' => 68,
                'name' => 'Bomber Floral',
                'slug' => 'FEMBOMFLO001',
                'details' => 'Tamanho Único.',
                'price' => 60,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            4 => 
            array (
                'id' => 69,
                'name' => 'T-Shirt Seja amor por onde for',
                'slug' => 'FEMTSHSEJ001',
                'details' => 'Body alcinha reto zig zag estampado.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            5 => 
            array (
                'id' => 70,
                'name' => 'T-Shirt Bonjour Paris',
                'slug' => 'FEMTSHBON001',
                'details' => 'Body alcinha reto zig zag estampado.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            6 => 
            array (
                'id' => 71,
                'name' => 'T-Shirt Fé amor esperança',
                'slug' => 'FEMTSHFAE001',
                'details' => 'Body alcinha reto zig zag estampado.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            7 => 
            array (
                'id' => 72,
                'name' => 'T-Shirt Dog',
                'slug' => 'FEMTSHDOG001',
                'details' => 'Body alcinha reto zig zag estampado.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            8 => 
            array (
                'id' => 73,
                'name' => 'Shorts Colorido Love',
                'slug' => 'FEMSHOLOV001',
                'details' => 'Disponível em várias cores.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            9 => 
            array (
                'id' => 74,
                'name' => 'Saia com Laço Frontal',
                'slug' => 'FEMSAILAC001',
                'details' => 'Disponível em várias cores.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
            10 => 
            array (
                'id' => 75,
                'name' => 'Vestido Alcinha Zig Zag',
                'slug' => 'FEMVESZIG001',
                'details' => 'Tamanho Único e Cor unica.',
                'price' => 35,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                'created_at' => '2019-10-26 23:00:00',
                'updated_at' => '2019-10-26 23:00:00',
            ),
        ));

        $product = Product::find(65);
        $product->categories()->attach(6);
        $product = Product::find(66);
        $product->categories()->attach(6);
        $product = Product::find(67);
        $product->categories()->attach(6);
        $product = Product::find(68);
        $product->categories()->attach(6);
        $product = Product::find(69);
        $product->categories()->attach(6);
        $product = Product::find(70);
        $product->categories()->attach(6);
        $product = Product::find(71);
        $product->categories()->attach(6);
        $product = Product::find(72);
        $product->categories()->attach(6);
        $product = Product::find(73);
        $product->categories()->attach(6);
        $product = Product::find(74);
        $product->categories()->attach(6);
        $product = Product::find(75);
        $product->categories()->attach(6);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 76,
                'name' => 'Boné New Era Yankees Preto',
                'slug' => 'BONNEWNYY001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'O cap é confeccionado em sarja e recebe clássica flag New Era na lateral esquerda e logo MLB na parte posterior. A aba curvada protege o rosto dos raios solares e garante um visual old school. As vias respiráveis na parte superior ficam responsáveis por dissipar a umidade e garantem aquela sensação agradável de bem-estar.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            1 => 
            array (
                'id' => 77,
                'name' => 'Boné New Era Yankees Rosa',
                'slug' => 'BONNEWNYY002',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'O cap é confeccionado em sarja e recebe clássica flag New Era na lateral esquerda e logo MLB na parte posterior. A aba curvada protege o rosto dos raios solares e garante um visual old school. As vias respiráveis na parte superior ficam responsáveis por dissipar a umidade e garantem aquela sensação agradável de bem-estar.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            2 => 
            array (
                'id' => 78,
                'name' => 'Boné New Era Angels Vermelho',
                'slug' => 'BONNEWLAA001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'O cap é confeccionado em sarja e recebe clássica flag New Era na lateral esquerda e logo MLB na parte posterior. A aba curvada protege o rosto dos raios solares e garante um visual old school. As vias respiráveis na parte superior ficam responsáveis por dissipar a umidade e garantem aquela sensação agradável de bem-estar.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            3 => 
            array (
                'id' => 79,
                'name' => 'Boné New Era Bulls',
                'slug' => 'BONNEWCHB001',
                'details' => 'Ajuste elástico, aba reta.',
                'price' => 60,
                'description' => 'O cap é confeccionado em sarja e recebe clássica flag New Era na lateral esquerda e logo NBA na parte posterior. A aba curvada protege o rosto dos raios solares e garante um visual old school. As vias respiráveis na parte superior ficam responsáveis por dissipar a umidade e garantem aquela sensação agradável de bem-estar.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            4 => 
            array (
                'id' => 80,
                'name' => 'Boné New Era Warriors',
                'slug' => 'BONNEWGSW001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'O cap é confeccionado em sarja e recebe clássica flag New Era na lateral esquerda e logo NBA na parte posterior. A aba curvada protege o rosto dos raios solares e garante um visual old school. As vias respiráveis na parte superior ficam responsáveis por dissipar a umidade e garantem aquela sensação agradável de bem-estar.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            5 => 
            array (
                'id' => 81,
                'name' => 'Boné Oakley Tincan Pt',
                'slug' => 'BONOAKTIN001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para completar os looks ao estilo urbano, aposte em acessórios como o Boné Oakley Aba Curva Tincan Masculino. Versátil, o modelo traz o logo da marca com estampa camuflada e não tem ajuste à cabeça.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            6 => 
            array (
                'id' => 82,
                'name' => 'Boné Oakley Tincan Br',
                'slug' => 'BONOAKTIN002',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para completar os looks ao estilo urbano, aposte em acessórios como o Boné Oakley Aba Curva Tincan Masculino. Versátil, o modelo traz o logo da marca com estampa camuflada e não tem ajuste à cabeça.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            7 => 
            array (
                'id' => 83,
                'name' => 'Boné Oakley Tincan Ci',
                'slug' => 'BONOAKTIN003',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para completar os looks ao estilo urbano, aposte em acessórios como o Boné Oakley Aba Curva Tincan Masculino. Versátil, o modelo traz o logo da marca com estampa camuflada e não tem ajuste à cabeça.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            8 => 
            array (
                'id' => 84,
                'name' => 'Boné Oakley Tincan Am',
                'slug' => 'BONOAKTIN004',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para completar os looks ao estilo urbano, aposte em acessórios como o Boné Oakley Aba Curva Tincan Masculino. Versátil, o modelo traz o logo da marca com estampa camuflada e não tem ajuste à cabeça.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            9 => 
            array (
                'id' => 85,
                'name' => 'Boné Oakley Tincan Az',
                'slug' => 'BONOAKTIN005',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para completar os looks ao estilo urbano, aposte em acessórios como o Boné Oakley Aba Curva Tincan Masculino. Versátil, o modelo traz o logo da marca com estampa camuflada e não tem ajuste à cabeça.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            10 => 
            array (
                'id' => 86,
                'name' => 'Boné Tommy Hilfiger Pt',
                'slug' => 'BONTMHCLA001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Básico, o Boné Tommy Hilfiger Aba Curva com Logo Masculino aposta em um tom monocromático com o clássico logo da grife. Feito em algodão, conta com fecho em strapback para melhor ajuste.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            11 => 
            array (
                'id' => 87,
                'name' => 'Boné Tommy Hilfiger Br',
                'slug' => 'BONTMHCLA002',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Básico, o Boné Tommy Hilfiger Aba Curva com Logo Masculino aposta em um tom monocromático com o clássico logo da grife. Feito em algodão, conta com fecho em strapback para melhor ajuste.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            12 => 
            array (
                'id' => 88,
                'name' => 'Boné Lacoste B.Croc Pt',
                'slug' => 'BONLACBIG001',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para acompanhar as produções casuais, aposte no Boné Lacoste Sport. Confeccionado em algodão, tem aba curva, perfuros para respiro, fechamento regulável e aplique da marca.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
            13 => 
            array (
                'id' => 89,
                'name' => 'Boné Lacoste B.Croc Az',
                'slug' => 'BONLACBIG002',
                'details' => 'Cap casual com ajuste elástico.',
                'price' => 60,
                'description' => 'Para acompanhar as produções casuais, aposte no Boné Lacoste Sport. Confeccionado em algodão, tem aba curva, perfuros para respiro, fechamento regulável e aplique da marca.',
                'created_at' => '2019-10-27 02:00:00',
                'updated_at' => '2019-10-27 02:00:00',
            ),
        ));

        $product = Product::find(76);
        $product->categories()->attach(5);
        $product = Product::find(77);
        $product->categories()->attach(5);
        $product = Product::find(78);
        $product->categories()->attach(5);
        $product = Product::find(79);
        $product->categories()->attach(5);
        $product = Product::find(80);
        $product->categories()->attach(5);
        $product = Product::find(81);
        $product->categories()->attach(5);
        $product = Product::find(82);
        $product->categories()->attach(5);
        $product = Product::find(83);
        $product->categories()->attach(5);
        $product = Product::find(84);
        $product->categories()->attach(5);
        $product = Product::find(85);
        $product->categories()->attach(5);
        $product = Product::find(86);
        $product->categories()->attach(5);
        $product = Product::find(87);
        $product->categories()->attach(5);
        $product = Product::find(88);
        $product->categories()->attach(5);
        $product = Product::find(89);
        $product->categories()->attach(5);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 90,
                'name' => 'Bermuda Jeans Azul Detonada',
                'slug' => 'BERJEADET001',
                'details' => 'Jeans com Lycra.',
                'price' => 60,
                'description' => 'Bermuda masculina desenvolvida em jeans com elasticidade. A modelagem tem caimento que afunila levemente do quadril à barra. A parte frontal conta com três bolsos enquanto a parte posterior tem dois aplicados.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            1 => 
            array (
                'id' => 91,
                'name' => 'Short Bob Esponja',
                'slug' => 'BERESTBOB001',
                'details' => 'Tecido 100% Poliéster de secagem rápida.',
                'price' => 50,
                'description' => 'Com esse short você nunca se sentirá sozinho, sua melhor companhia até debaixo da água. A caretice mundial nos faz remeter aos shorts originados nos anos 70 afins de levar até vocês o Vintage mais ousado e criativo de todos os tempos, com estampas totalmente irreverentes, fazendo com que você viaje infinitamente sem sair do lugar.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            2 => 
            array (
                'id' => 92,
                'name' => 'Bermuda Surf Lacoste P/B',
                'slug' => 'BERSURLAC001',
                'details' => 'Bermuda tipo secagem rápida.',
                'price' => 50,
                'description' => 'Bermuda Lacoste Surf, com detalhe de bordado da marca na barra e dois bolsos na parte superior. Modelagem reta e elástico com cós. A Bermuda Lacoste Surf é confeccionada em poliéster.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            3 => 
            array (
                'id' => 93,
                'name' => 'Bermuda Surf Lacoste Mar',
                'slug' => 'BERSURLAC002',
                'details' => 'Bermuda tipo secagem rápida.',
                'price' => 50,
                'description' => 'Bermuda Lacoste Surf, com detalhe de bordado da marca na barra e dois bolsos na parte superior. Modelagem reta e elástico com cós. A Bermuda Lacoste Surf é confeccionada em poliéster.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            4 => 
            array (
                'id' => 94,
                'name' => 'Bermuda Surf Lacoste Aço',
                'slug' => 'BERSURLAC003',
                'details' => 'Bermuda tipo secagem rápida.',
                'price' => 50,
                'description' => 'Bermuda Lacoste Surf, com detalhe de bordado da marca na barra e dois bolsos na parte superior. Modelagem reta e elástico com cós. A Bermuda Lacoste Surf é confeccionada em poliéster.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            5 => 
            array (
                'id' => 95,
                'name' => 'Bermuda Surf Hurley Az',
                'slug' => 'BERSURHUR001',
                'details' => 'Bermuda tipo secagem rápida.',
                'price' => 50,
                'description' => 'A Bermuda D\'Água Hurley é pra você que ama praia e sol! Fabricado em tecido leve e macio, o modelo garante conforto e excelente resistência à água, pra você se molhar a vontade. O bolso lateral comporta pequenos objetos e a regulagem em cordão permite um ajuste prático e personalizado.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            6 => 
            array (
                'id' => 96,
                'name' => 'Bermuda Surf Oakley Az',
                'slug' => 'BERSUROAK001',
                'details' => 'Bermuda tipo secagem rápida.',
                'price' => 50,
                'description' => 'A Bermuda D\'Água Oakley é pra você que ama praia e sol! Fabricado em tecido leve e macio, o modelo garante conforto e excelente resistência à água, pra você se molhar a vontade. O bolso lateral comporta pequenos objetos e a regulagem em cordão permite um ajuste prático e personalizado.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
            7 => 
            array (
                'id' => 97,
                'name' => 'Short Tommy Hilfiger Tri',
                'slug' => 'BERTMHTRI001',
                'details' => 'Short de banho em três cores.',
                'price' => 50,
                'description' => 'Símbolo da marca bordado na parte da frente do lado direito. Cordão para fechamento com nome da marca gravado. Possui três listas verticais nas cores da marca. Dois bolsos traseiros embutidos.Costura com linha em vermelho e azul marinho na parte interna.',
                'created_at' => '2019-10-27 02:30:00',
                'updated_at' => '2019-10-27 02:30:00',
            ),
        ));

        $product = Product::find(90);
        $product->categories()->attach(4);
        $product = Product::find(91);
        $product->categories()->attach(4);
        $product = Product::find(92);
        $product->categories()->attach(4);
        $product = Product::find(93);
        $product->categories()->attach(4);
        $product = Product::find(94);
        $product->categories()->attach(4);
        $product = Product::find(95);
        $product->categories()->attach(4);
        $product = Product::find(96);
        $product->categories()->attach(4);
        $product = Product::find(97);
        $product->categories()->attach(4);

        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 98,
                'name' => 'Box Cuecas CK 6un.',
                'slug' => 'ACECUEBCK001',
                'details' => 'kite de cuecas Calvin Klein cores variadas',
                'price' => 30,
                'description' => 'Kit 6pçs Cuecas Calvin Klein Underwear Slip, integrante da linha Cotton Stretch, composto por seis cuecas em cores diversas, sendo estas em modelagem Slip, com cós personalizado por bordado temático da marca, que além de agregar originalidade, oferece maior ajuste ao vestir.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            1 => 
            array (
                'id' => 99,
                'name' => 'Chinelo Oakley Preto',
                'slug' => 'ACECHIOAK001',
                'details' => 'Chinelo casual Oakley Rest',
                'price' => 150,
                'description' => 'O Chinelo Oakley Rest é produzido com a tecnologia exclusiva Unobtanium®, que oferece alta durabilidade e aumenta a aderência conforme a transpiração. A estrutura em EVA garante maciez nos pés.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            2 => 
            array (
                'id' => 100,
                'name' => 'Óculos de Sol Oakley Juliet',
                'slug' => 'ACEODSOJU001',
                'details' => 'As lentes melhoram as cores, o contraste e os detalhes.',
                'price' => 120,
                'description' => 'O Óculos Oakley Masculino é ideal para acompanhar o dia a dia, oferecendo tecnologias de máxima proteção UV e lentes que melhoram cores, contrastes e harmonizam a transmissão de luz.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            3 => 
            array (
                'id' => 101,
                'name' => 'Oculos de Sol Oakley Romeo 1',
                'slug' => 'ACEODSORO001',
                'details' => 'As lentes melhoram as cores, o contraste e os detalhes.',
                'price' => 120,
                'description' => 'O Óculos Oakley Masculino é ideal para acompanhar o dia a dia, oferecendo tecnologias de máxima proteção UV e lentes que melhoram cores, contrastes e harmonizam a transmissão de luz.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            4 => 
            array (
                'id' => 102,
                'name' => 'Relógio Casio Vintage Prata',
                'slug' => 'ACERELCAS001',
                'details' => 'Luz Led, Alarme, Cronômetro e Calendário.',
                'price' => 150,
                'description' => 'O design retrô do Relógio Casio Vintage A158WA-1D é perfeito para quem gosta de combinar os estilos esportivo e urbano. Possui ainda recursos práticos como alarme, cronômetro e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            5 => 
            array (
                'id' => 103,
                'name' => 'Relógio Casio Vintage Branco',
                'slug' => 'ACERELCAS002',
                'details' => 'Luz Led, Alarme, Cronômetro e Calendário.',
                'price' => 150,
                'description' => 'O design retrô do Relógio Casio Vintage A158WA-1D é perfeito para quem gosta de combinar os estilos esportivo e urbano. Possui ainda recursos práticos como alarme, cronômetro e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            6 => 
            array (
                'id' => 104,
                'name' => 'Relógio Cássio G-Shock P/V',
                'slug' => 'ACERELCGS001',
                'details' => 'Alarme, cronômetro 1/100 seg, alerta luminoso, calendário.',
                'price' => 150,
                'description' => 'O Relógio G-Shock Cássio possui detalhes que vão fazer toda diferença nas suas produções do dia a dia. Leve e resistente, traz funções como alarme, cronômetro, alerta luminoso e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            7 => 
            array (
                'id' => 105,
                'name' => 'Relógio Cássio G-Shock P/D',
                'slug' => 'ACERELCGS002',
                'details' => 'Alarme, cronômetro 1/100 seg, alerta luminoso, calendário.',
                'price' => 150,
                'description' => 'O Relógio G-Shock Cássio possui detalhes que vão fazer toda diferença nas suas produções do dia a dia. Leve e resistente, traz funções como alarme, cronômetro, alerta luminoso e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            8 => 
            array (
                'id' => 106,
                'name' => 'Relógio Cássio G-Shock A/P',
                'slug' => 'ACERELCGS003',
                'details' => 'Alarme, cronômetro 1/100 seg, alerta luminoso, calendário.',
                'price' => 150,
                'description' => 'O Relógio G-Shock Cássio possui detalhes que vão fazer toda diferença nas suas produções do dia a dia. Leve e resistente, traz funções como alarme, cronômetro, alerta luminoso e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            9 => 
            array (
                'id' => 107,
                'name' => 'Relógio Cássio G-Shock B/A',
                'slug' => 'ACERELCGS004',
                'details' => 'Alarme, cronômetro 1/100 seg, alerta luminoso, calendário.',
                'price' => 150,
                'description' => 'O Relógio G-Shock Cássio possui detalhes que vão fazer toda diferença nas suas produções do dia a dia. Leve e resistente, traz funções como alarme, cronômetro, alerta luminoso e calendário.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
            10 => 
            array (
                'id' => 108,
                'name' => 'Relógio Invicta Pro Diver',
                'slug' => 'ACERELIPD001',
                'details' => 'Fabricado em Aço inoxidável e Poliuretano.',
                'price' => 150,
                'description' => 'Passe por qualquer momento de seu dia a dia usufruindo da orientação precisa do Relógio Invicta Pro Diver 6981! Com estilo insuperável, os detalhes internos são projetados com variações de trabalhos negativos. Forjado com extremo cuidado e elegância, a eficácia com que estes relógios funcionam permite que você explore o Pro Driver sempre no máximo de sua performance.',
                'created_at' => '2019-10-27 03:30:00',
                'updated_at' => '2019-10-27 03:30:00',
            ),
        ));

        $product = Product::find(98);
        $product->categories()->attach(3);
        $product = Product::find(99);
        $product->categories()->attach(3);
        $product = Product::find(100);
        $product->categories()->attach(3);
        $product = Product::find(101);
        $product->categories()->attach(3);
        $product = Product::find(102);
        $product->categories()->attach(3);
        $product = Product::find(103);
        $product->categories()->attach(3);
        $product = Product::find(104);
        $product->categories()->attach(3);
        $product = Product::find(105);
        $product->categories()->attach(3);
        $product = Product::find(106);
        $product->categories()->attach(3);
        $product = Product::find(107);
        $product->categories()->attach(3);
        $product = Product::find(108);
        $product->categories()->attach(3);
    }
}