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
            ], [
                "id" => 2,
                "name" => "Sekcja oceanów",
                "description" => "Nasze najpopularniejsze Wycieczki na Oceanie",
            ], [
                "id" => 3,
                "name" => "Slider",
                "description" => null,
            ], [
                "id" => 4,
                "name" => "Dlaczego my",
                "description" => null,
            ], [
                "id" => 5,
                "name" => "Slider najpopularniejszych wycieczek",
                "description" => "Nasze najpopularniejsze Wycieczki na Oceanie",
            ], [
                "id" => 6,
                "name" => "Opinie klientów",
                "description" => "Najnowsze opinie naszych klientów",
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
                "category" => 1,
            ], [
                "name" => "Ocean karaibski",
                "descriptions" => 'Egzotyczne wakacje na Karaibach! 🌴⛵',
                "category" => 2,
            ], [
                "name" => "Ocean Pacyfik",
                "descriptions" => 'Odkryj tajemnice Pacyfiku na luksusowym jachcie! 🌊⛴️',
                "category" => 2,
            ], [
                "name" => "Ocean Atlantycki",
                "descriptions" => 'Przygoda na Atlantyku! 🌊⛵',
                "category" => 2,
            ], [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category" => 2,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category" => 3,
            ], [
                "name" => "Dlaczego Wybrać Nasze Wycieczki?",
                "descriptions" => '🌊 <b>Wyjątkowe Doświadczenia:</b> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.',
                "category" => 4,
            ], [
                "name" => "Ocean karaibski",
                "descriptions" => 'Egzotyczne wakacje na Karaibach! 🌴⛵',
                "category" => 5,
            ], [
                "name" => "Ocean Pacyfik",
                "descriptions" => 'Odkryj tajemnice Pacyfiku na luksusowym jachcie! 🌊⛴️',
                "category" => 5,
            ], [
                "name" => "Ocean Atlantycki",
                "descriptions" => 'Przygoda na Atlantyku! 🌊⛵',
                "category" => 5,
            ], [
                "name" => "Ocean Indyjski",
                "descriptions" => 'Zanurz się w przyrodzie Indyjskiego Oceanu! 🌏🚤',
                "category" => 5,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ], [
                "name" => "Patryk Dachwitz",
                "descriptions" => 'Lorem isum loremLorem isum loremLorem isum lorem',
                "category" => 6,
            ],
        ];

        DB::table('category_banners')->truncate();
        DB::table('banners')->truncate();


        DB::table('category_banners')->insertOrIgnore($category);
        DB::table('banners')->insertOrIgnore($banners);
    }
}
