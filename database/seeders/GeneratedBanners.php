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
                "name" => "🌊 Czekamy na Ciebie na Pokładzie!",
                "description" => trim('
                <div class="my-4">
                Przekonaj się, dlaczego podróż morską z nami to wybór, który pamięta się na zawsze.<br />
                Gwarantujemy niezapomnianą podróż!
                </div>
                <div>
                    <a class="btn btn-light text-dark fs-4">Rezerwuj teraz!</a>
                </div>
                '),
                "category_banner_id" => 1,
            ], [
                "name" => "Ocean Spokojny",
                "description" => null,
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Atlantycki",
                "description" => null,
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Indyjski",
                "description" => null,
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Arktyczny",
                "description" => null,
                "category_banner_id" => 2,
            ], [
                "name" => "Ocean Południowy",
                "description" => null,
                "category_banner_id" => 2,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "description" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "description" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "description" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category_banner_id" => 4,
            ], [
                "name" => "Ocean karaibski",
                "description" => 'Egzotyczne wakacje na Karaibach! 🌴⛵',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Pacyfik",
                "description" => 'Odkryj tajemnice Pacyfiku na luksusowym jachcie! 🌊⛴️',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Atlantycki",
                "description" => 'Przygoda na Atlantyku! 🌊⛵',
                "category_banner_id" => 5,
            ], [
                "name" => "Ocean Indyjski",
                "description" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category_banner_id" => 5,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category_banner_id" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "description" => 'Lorem isum loremLorem isum loremLorem isum lorem',
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
