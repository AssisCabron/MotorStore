<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotosSeeder extends Seeder
{
    public function run()
    {
        DB::table('fotos')->insert([
            // CADILLAC
            ['carro_id' => 1, 'link_foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/08/2023-cadillac-escalade-v-106.jpg?quality=70&strip=info&w=1280&h=720&crop=1'],
            ['carro_id' => 1, 'link_foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/08/2023-cadillac-escalade-v-106.jpg?quality=70&strip=info&w=1024&crop=1'],
            ['carro_id' => 1, 'link_foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/08/2023-cadillac-escalade-v-102.jpg?quality=70&strip=info&w=1024&crop=1'],
            ['carro_id' => 1, 'link_foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/08/2023-cadillac-escalade-v-104.jpg?quality=70&strip=info&w=1024&crop=1'],
            ['carro_id' => 1, 'link_foto' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2022/08/2023-cadillac-escalade-v-113.jpg?quality=70&strip=info&w=1024&crop=1'],

            ['carro_id' => 2, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOmJSSSmQvnZeQj9alL6HtrSRq2Mpe_aiLMg&s'],
            ['carro_id' => 2, 'link_foto' => 'https://di-uploads-pod35.dealerinspire.com/fivestarcadillac/uploads/2023/12/2024-Cadillac-CT5-V-Blackwing.jpg'],
            ['carro_id' => 2, 'link_foto' => 'https://res.cloudinary.com/mecum/image/upload/v1745423610/auctions/SC25/1146954/146207.jpg'],

            ['carro_id' => 3, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKLyCK_8hbVrjcar1Y3kSGm8a0X4Q1j1aQJQ&s'],
            ['carro_id' => 4, 'link_foto' => 'https://cdn.motor1.com/images/mgl/NG1Kn9/s1/2024-cadillac-celestiq-reveal.jpg'],
            ['carro_id' => 5, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBonJxxjK4BPldN9T-VpP7ANoo-9WT82k0iQ&s'],

            // LAND ROVER
            ['carro_id' => 6, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaroRjw2oTYhKXqEcW_4vaeu-cSikScuyRwg&s'],
            ['carro_id' => 6, 'link_foto' => 'https://s2-autoesporte.glbimg.com/-asD1mWtI7HCI-52YtCe8NcL6qs=/0x0:5472x3648/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2022/V/Q/Ry4sxnT1O0LeeYDOhCPg/rrv-23my-p400e-phev-78-.jpg'],
            ['carro_id' => 6, 'link_foto' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251030/land-rover-range-rover-velar-2-0-p400e-phev-rdynamic-hse-automatico-wmimagem13562806468.webp?s=fill&w=552&h=414&q=60'],
            ['carro_id' => 6, 'link_foto' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251030/land-rover-range-rover-velar-2-0-p400e-phev-rdynamic-hse-automatico-wmimagem13562837035.webp?s=fill&w=552&h=414&q=60'],
            ['carro_id' => 6, 'link_foto' => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251030/land-rover-range-rover-velar-2-0-p400e-phev-rdynamic-hse-automatico-wmimagem13562888630.webp?s=fill&w=552&h=414&q=60'],

            ['carro_id' => 7, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyPwelLUriXg9qcbuiVB8o0r6gxCANe9Ke7g&s'],
            ['carro_id' => 8, 'link_foto' => 'https://http2.mlstatic.com/D_NQ_NP_2X_769205-MLB95409681632_102025-T-land-rover-discovery-sport-20-d200-turbo-diesel-r-dynamic-s.webp'],
            ['carro_id' => 9, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrB9Olb6UwqBII0GoFZ4qMDTiX49pRJyMHrg&s'],
            ['carro_id' => 10, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo6RubDuayAt1VGwAFJMOy_xRdxOv-Am5BYA&s'],

            // KOENIGSEGG
            ['carro_id' => 11, 'link_foto' => 'https://carrosbemmontados.com.br/wp-content/uploads/2023/07/Koenigsegg-Jesko-Absolut.jpg.webp'],
            ['carro_id' => 11, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg3W2oy5Vd5JG6Vy_477dwXxVwtkk_UB3ADw&s'],
            ['carro_id' => 11, 'link_foto' => 'https://uploads.diariodopoder.com.br/2021/01/Koenigsegg-Jesko_Absolut-2021-1600-05.jpg'],
            ['carro_id' => 11, 'link_foto' => 'https://preview.redd.it/is-the-koenigsegg-jesko-absolut-the-only-fastest-production-v0-8s8kgaf2uo9f1.jpg?width=640&crop=smart&auto=webp&s=ac927c6727d0f0a21dd0436e8b0a8b5a4e5b4ab8'],
            ['carro_id' => 11, 'link_foto' => 'https://revistacarro.com.br/koenigsegg-jesko-e-um-hiperesportivo-flex/koenigsegg-jesko_5/'],

            ['carro_id' => 12, 'link_foto' => 'https://cdn.motor1.com/images/mgl/B4N6w/s1/4x3/megacarro-koenigsegg-regera-de-1500-cv-promete-400-km-h-em-20-segundos.webp'],
            ['carro_id' => 13, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2EZMAB04CfYP16nBlojMkymFBcqOf-Gp-7A&s'],
            ['carro_id' => 14, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvezdwWeZJwJAIg5HOW83SAH2HpgaWi-vlsA&s'],
            ['carro_id' => 15, 'link_foto' => 'https://s2-autoesporte.glbimg.com/sm1QiXwcG6fF0qDpNPwC0THEbuc=/0x0:1920x1074/924x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2022/L/O/Bk5MGCTUaml8gyR9OpWA/koenigsegg-cc850-the-swedish-hypercar-new-years-resolution-came-true-196424-1.jpg'],

            // PORSCHE
            ['carro_id' => 16, 'link_foto' => 'https://i.ytimg.com/vi/5TFuIqRQ2b0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCe6vummO9xqYULIqa_CSq5D0cyfQ'],
            ['carro_id' => 16, 'link_foto' => 'https://s2-autoesporte.glbimg.com/Py6Em7BDzhlu-sgTwVGfW26Z-hc=/0x0:5000x3333/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/Y/p/hSaGNESHKi50qhtAnWHQ/20200810-524-porsche-rodrigoruiz-00542.jpg'],
            ['carro_id' => 16, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnb-Cd25VFAJY2-3L50YjkwC9z_MmJGfTWCQ&s'],

            ['carro_id' => 17, 'link_foto' => 'https://images-porsche.imgix.net/-/media/8E5CCEE342DE42B9B07FBC6D592BE942_6722B9B370094B6ABF07F6005F26F3C6_CY24J5TOX0012-exterior?w=999&q=85&auto=format'],
            ['carro_id' => 18, 'link_foto' => 'https://cdn.motor1.com/images/mgl/QpzX1/s1/porsche-panamera-gts-2021-in-rot-front-fahraufnahme-auf-der-rennstrecke.webp'],
            ['carro_id' => 19, 'link_foto' => 'https://s2-autoesporte.glbimg.com/yL2mww_fODdD-ZrDWZSBzdwHGgE=/0x0:3949x2222/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2024/L/i/fi2yVNSOqSGHtYcWABTA/s24-0348-fine.jpg'],
            ['carro_id' => 20, 'link_foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5-bURYAkoDvZhCHGNIZwVYX6SqrSV-JOZqA&s'],
        ]);
    }
}
