<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneratedBanners extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                "id" => 1,
                "name" => "Slider",
                "description" => null,
                'template_id' => 1
            ], [
                "id" => 2,
                "name" => "Sekcja oceanów",
                "description" => "Nasze najpopularniejsze Wycieczki na Oceanie",
                'template_id' => 2
            ], [
                "id" => 3,
                "name" => "Slider",
                "description" => null,
                'template_id' => 3
            ], [
                "id" => 4,
                "name" => "Dlaczego my",
                "description" => null,
                'template_id' => 4
            ], [
                "id" => 5,
                "name" => "Slider najpopularniejszych wycieczek",
                "description" => "Nasze najpopularniejsze Wycieczki na Oceanie",
                'template_id' => 5
            ], [
                "id" => 6,
                "name" => "Opinie klientów",
                "description" => "Najnowsze opinie naszych klientów",
                'template_id' => 6
            ],
        ];

        $banners = [
            [
                "name" => "MainBanner",
                "descriptions" => trim('
                <h2 class="fs-1">Lorem Ipsum is simply</h2>
                <p class="w-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially u</p>
                <div>
                    <a class="btn btn-info">Sprawdz ofertę</a>
                </div>
                '),
                "category_banner_id" => 1,
            ], [
                "name" => "Ocean karaibski",
                "descriptions" => 'Egzotyczne wakacje na Karaibach! 🌴⛵',
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Pacyfik",
                "descriptions" => 'Odkryj tajemnice Pacyfiku na luksusowym jachcie! 🌊⛴️',
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Atlantycki",
                "descriptions" => 'Przygoda na Atlantyku! 🌊⛵',
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 2,
            ],  [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 2,
            ],  [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 2,
            ],  [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 2,
            ],  [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 2,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 4,
            ], [
                "name" => "Ocean karaibski",
                "descriptions" => 'Egzotyczne wakacje na Karaibach! 🌴⛵',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Pacyfik",
                "descriptions" => 'Odkryj tajemnice Pacyfiku na luksusowym jachcie! 🌊⛴️',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Atlantycki",
                "descriptions" => 'Przygoda na Atlantyku! 🌊⛵',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 5,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ],
        ];

        $template = [
            [
          "id" => 1,
          'name' => "banner"
        ], [
          "id" => 2,
          'name' => "oceans"
        ], [
          "id" => 3,
          'name' => "yachts"
        ], [
          "id" => 4,
          'name' => "why"
        ], [
          "id" => 5,
          'name' => "popularTrips"
        ], [
          "id" => 6,
          'name' => "opinions"
        ],
        ];

        DB::table('category_banners')->truncate();
        DB::table('banners')->truncate();
        DB::table('templates')->truncate();

        DB::table('category_banners')->insertOrIgnore($category);
        DB::table('banners')->insertOrIgnore($banners);
        DB::table('templates')->insertOrIgnore($template);
    }
}
