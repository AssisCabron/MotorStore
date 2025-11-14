<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarroSeeder extends Seeder
{
    public function run()
    {
        DB::table('carro')->insert([
            // Cadillac
            [
                'id' => 1,
                'marca' => 'Cadillac',
                'descricao' => 'Cadillac Escalade V-Series',
                'ano_fabricacao' => 2023,
                'cor' => 'Preto',
                'preco' => 890000.00,
                'sobre' => 'O Escalade V-Series combina luxo extremo com o poder de um motor V8 supercharged. Oferece tecnologia avançada, interior refinado e desempenho digno de um SUV esportivo de elite.'
            ],
            [
                'id' => 2,
                'marca' => 'Cadillac',
                'descricao' => 'Cadillac CT5-V Blackwing',
                'ano_fabricacao' => 2024,
                'cor' => 'Branco Pérola',
                'preco' => 750000.00,
                'sobre' => 'O CT5-V Blackwing entrega potência bruta e conforto premium. Equipado com motor V8 de 668 cv, é o sedã mais potente da marca, projetado para alta performance e luxo absoluto.'
            ],
            [
                'id' => 3,
                'marca' => 'Cadillac',
                'descricao' => 'Cadillac XT6 Sport',
                'ano_fabricacao' => 2022,
                'cor' => 'Cinza Metálico',
                'preco' => 520000.00,
                'sobre' => 'SUV espaçoso de três fileiras com acabamento sofisticado e excelente conforto. O XT6 Sport oferece dirigibilidade suave e segurança avançada, ideal para famílias exigentes.'
            ],
            [
                'id' => 4,
                'marca' => 'Cadillac',
                'descricao' => 'Cadillac Lyriq Electric',
                'ano_fabricacao' => 2024,
                'cor' => 'Azul Elétrico',
                'preco' => 680000.00,
                'sobre' => 'Primeiro SUV elétrico da Cadillac, o Lyriq impressiona pelo design futurista, silêncio absoluto e autonomia superior a 500 km, redefinindo o conceito de luxo sustentável.'
            ],
            [
                'id' => 5,
                'marca' => 'Cadillac',
                'descricao' => 'Cadillac CT4-V',
                'ano_fabricacao' => 2023,
                'cor' => 'Vermelho Rubi',
                'preco' => 450000.00,
                'sobre' => 'Sedã compacto esportivo com desempenho ágil e design elegante. O CT4-V oferece dirigibilidade precisa e tecnologias de ponta para uma experiência de condução envolvente.'
            ],

            // Land Rover
            [
                'id' => 6,
                'marca' => 'Land Rover',
                'descricao' => 'Range Rover Velar',
                'ano_fabricacao' => 2023,
                'cor' => 'Branco Gelo',
                'preco' => 580000.00,
                'sobre' => 'O Range Rover Velar combina elegância minimalista com desempenho off-road. Interior luxuoso e tecnologias modernas garantem conforto em qualquer terreno.'
            ],
            [
                'id' => 7,
                'marca' => 'Land Rover',
                'descricao' => 'Defender 110 X-Dynamic',
                'ano_fabricacao' => 2024,
                'cor' => 'Verde Militar',
                'preco' => 690000.00,
                'sobre' => 'Ícone do off-road moderno, o Defender 110 X-Dynamic oferece robustez incomparável, tração integral e tecnologia avançada, mantendo o espírito aventureiro da Land Rover.'
            ],
            [
                'id' => 8,
                'marca' => 'Land Rover',
                'descricao' => 'Discovery Sport R-Dynamic',
                'ano_fabricacao' => 2022,
                'cor' => 'Cinza Grafite',
                'preco' => 410000.00,
                'sobre' => 'SUV versátil com espaço para toda a família, o Discovery Sport R-Dynamic combina design esportivo, tração 4x4 e conforto para viagens urbanas e trilhas.'
            ],
            [
                'id' => 9,
                'marca' => 'Land Rover',
                'descricao' => 'Range Rover Evoque',
                'ano_fabricacao' => 2023,
                'cor' => 'Preto Ebony',
                'preco' => 470000.00,
                'sobre' => 'O Range Rover Evoque é um SUV de luxo compacto com estilo arrojado e interior premium. Oferece dirigibilidade refinada e alta eficiência em qualquer ambiente.'
            ],
            [
                'id' => 10,
                'marca' => 'Land Rover',
                'descricao' => 'Range Rover Autobiography',
                'ano_fabricacao' => 2024,
                'cor' => 'Azul Marinho',
                'preco' => 990000.00,
                'sobre' => 'Top de linha da Land Rover, o Autobiography representa luxo supremo e tecnologia exclusiva, com conforto excepcional e desempenho impressionante.'
            ],

            // Koenigsegg
            [
                'id' => 11,
                'marca' => 'Koenigsegg',
                'descricao' => 'Koenigsegg Jesko Absolut',
                'ano_fabricacao' => 2023,
                'cor' => 'Branco Polar',
                'preco' => 21000000.00,
                'sobre' => 'O Jesko Absolut é um hipercarro projetado para velocidade máxima. Com motor V8 biturbo e aerodinâmica extrema, promete ser o carro mais rápido do mundo.'
            ],
            [
                'id' => 12,
                'marca' => 'Koenigsegg',
                'descricao' => 'Koenigsegg Regera',
                'ano_fabricacao' => 2022,
                'cor' => 'Prata Espacial',
                'preco' => 18000000.00,
                'sobre' => 'O Regera combina motor V8 e sistema híbrido revolucionário, oferecendo potência absurda e conforto surpreendente. É a fusão perfeita entre tecnologia e luxo.'
            ],
            [
                'id' => 13,
                'marca' => 'Koenigsegg',
                'descricao' => 'Koenigsegg Gemera',
                'ano_fabricacao' => 2024,
                'cor' => 'Verde Escuro',
                'preco' => 19000000.00,
                'sobre' => 'Primeiro megacarro de quatro lugares do mundo, o Gemera entrega desempenho de supercarro com conforto familiar e tecnologia híbrida inovadora.'
            ],
            [
                'id' => 14,
                'marca' => 'Koenigsegg',
                'descricao' => 'Koenigsegg Agera RS',
                'ano_fabricacao' => 2020,
                'cor' => 'Laranja Fênix',
                'preco' => 15500000.00,
                'sobre' => 'O Agera RS é um marco na engenharia automotiva, combinando leveza, potência e aerodinâmica para entregar performance recordista e exclusividade.'
            ],
            [
                'id' => 15,
                'marca' => 'Koenigsegg',
                'descricao' => 'Koenigsegg CC850',
                'ano_fabricacao' => 2023,
                'cor' => 'Cinza Titânio',
                'preco' => 17000000.00,
                'sobre' => 'Edição limitada que celebra os 20 anos da marca, o CC850 mistura o design clássico do CC8S com tecnologia moderna e câmbio manual inovador.'
            ],

            // Porsche
            [
                'id' => 16,
                'marca' => 'Porsche',
                'descricao' => 'Porsche 911 Turbo S',
                'ano_fabricacao' => 2024,
                'cor' => 'Amarelo Solar',
                'preco' => 1590000.00,
                'sobre' => 'O lendário 911 Turbo S traz 650 cv e aceleração brutal, unindo elegância, conforto e performance inigualável. Um ícone atemporal da Porsche.'
            ],
            [
                'id' => 17,
                'marca' => 'Porsche',
                'descricao' => 'Porsche Cayenne Turbo GT',
                'ano_fabricacao' => 2023,
                'cor' => 'Preto Jet',
                'preco' => 1100000.00,
                'sobre' => 'SUV esportivo com alma de supercarro. O Cayenne Turbo GT oferece desempenho extremo e conforto refinado, mantendo o DNA Porsche em cada detalhe.'
            ],
            [
                'id' => 18,
                'marca' => 'Porsche',
                'descricao' => 'Porsche Panamera GTS',
                'ano_fabricacao' => 2022,
                'cor' => 'Vermelho Carmim',
                'preco' => 940000.00,
                'sobre' => 'Sedã esportivo com equilíbrio perfeito entre luxo e desempenho. O Panamera GTS traz motor V8, tração integral e interior sofisticado.'
            ],
            [
                'id' => 19,
                'marca' => 'Porsche',
                'descricao' => 'Porsche Taycan Turbo',
                'ano_fabricacao' => 2024,
                'cor' => 'Azul Elétrico',
                'preco' => 1250000.00,
                'sobre' => 'Sedã elétrico de alta performance, o Taycan Turbo combina aceleração instantânea, tecnologia futurista e o tradicional prazer de dirigir da Porsche.'
            ],
            [
                'id' => 20,
                'marca' => 'Porsche',
                'descricao' => 'Porsche 718 Cayman GTS',
                'ano_fabricacao' => 2023,
                'cor' => 'Cinza Carbono',
                'preco' => 870000.00,
                'sobre' => 'O 718 Cayman GTS oferece equilíbrio e precisão de condução excepcionais. Compacto, potente e refinado, é um dos esportivos mais puros da Porsche.'
            ],
        ]);
    }
}
