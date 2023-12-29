<?php
declare(strict_types=1);
namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $banners = [
            [
                "name" => "🌊 Czekamy na Ciebie na Pokładzie!",
                "description" => trim('
                <div class="my-4">
                Przekonaj się, dlaczego podróż morską z nami to wybór, który pamięta się na zawsze.<br />
                Gwarantujemy niezapomnianą podróż!
                </div>
                <div>
                    <a class="btn btn-light text-dark fs-5">Rezerwuj teraz!</a>
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
                "name" => "Dlaczego Nasze Wycieczki?",
                "description" => trim('
                    <ul class="list-unstyled">
                        <li><strong>🌊 Wyjątkowe Doświadczenia:</strong> Nasze wycieczki na jachtach to podróż, którą będziesz wspominać przez całe życie. Zanurz się w kulturze, historii i przyrodzie oceanów.</li>
                        <li><strong>🚤 Luksusowe Jachty:</strong> Podróżuj w stylu na naszych luksusowych jachtach, które łączą komfort, elegancję i najwyższą jakość obsługi.</li>
                        <li><strong>🌴 Ekskluzywne Destynacje:</strong> Odkryj odległe i urocze miejsca, do których nie dostaniesz się inaczej. Twórz wyjątkowe wspomnienia na nieodkrytych szlakach.</li>
                        <li><strong>🌟 Niezapomniane Chwile:</strong> Nasze wycieczki to okazja do przeżycia niezapomnianych chwil na oceanie. Znajdź swoją przygodę i wypoczynek z nami.</li>
                        <li><strong>✅ Gwarancja Satysfakcji:</strong> Jesteśmy dumni z wysokiej jakości usług i bezpieczeństwa. Twoje zadowolenie jest naszym priorytetem.</li>
                    </ul>
                '),
                "category_banner_id" => 4,
            ], [
                "name" => "StarBreeze",
                "description" => 'StarBreeze to klejnot nieba i morza. Z 150 miejscami dla gości, ten jacht zapewnia intymność i wyjątkowe widoki. Na jego pokładzie znajdziesz "Gwiezdne Obserwatorium" - idealne miejsce do zachwycania się nocnym niebem. Podaruj sobie niezapomniane chwile pod gwiazdami na pokładzie StarBreeze.',
                "category_banner_id" => 3,
            ], [
                "name" => "AquaVista",
                "description" => 'AquaVista to jacht dla miłośników nie tylko oceanu, ale także kina. Z 200 miejscami dla gości, ten statek oferuje unikatową atrakcję - "Podwodne Kino Morskie". Przeżyj niezwykłe doświadczenie oglądania filmów pod wodą, jednocześnie ciesząc się komfortem i elegancją na pokładzie AquaVista.',
                "category_banner_id" => 3,
            ], [
                "name" => "SeaSerenity",
                "description" => 'SeaSerenity to oaza spokoju na falach oceanu. Z 280 miejscami, ten jacht oferuje wyjątkowy komfort i relaks. "Serenity Spa Deck" to miejsce, gdzie luksus spotyka się z morzem, umożliwiając gościom korzystanie z zabiegów wellness przy jednoczesnym podziwianiu krajobrazów otwartego morza. Odkryj harmonię na pokładzie SeaSerenity.',
                "category_banner_id" => 3,
            ], [
                "name" => $faker->name(),
                "description" => "Ekskluzywna podróż jachtem z YachtTrips to była najbardziej niesamowita przygoda w moim życiu!",
                "category_banner_id" => 5,
            ], [
                "name" => $faker->name(),
                "description" => "Rejs jachtem z YachtTrips to był strzał w dziesiątkę! Jacht 'Perłowy Wiatr' był luksusowy, jedzenie wyśmienite, a widoki niesamowite.",
                "category_banner_id" => 5,
            ], [
                "name" => $faker->name(),
                "description" => "Nasz rejs z YachtTrips był absolutnie fantastyczny! Jacht 'Morski Raj' był elegancki, czysty, a atmosfera była niesamowita.",
                "category_banner_id" => 5,
            ], [
                "name" => $faker->name(),
                "description" => "Niezapomniane wrażenia! Jacht 'Słońce Morza' był doskonale przygotowany, a załoga sprawiła, że czuliśmy się jak prawdziwi goście VIP.",
                "category_banner_id" => 5,
            ], [
                "name" => $faker->name(),
                "description" => "Nigdy wcześniej nie doświadczyłam takiego luksusu! YachtTrips przekroczyła moje oczekiwania. Jacht 'Błękitny Horizont' był piękny.",
                "category_banner_id" => 5,
            ], [
                "name" => $faker->name(),
                "description" => "Szczerze polecam! YachtTrips dostarczyła nam niezapomniane wspomnienia. Jacht 'Złote Fale' był nie tylko elegancki, ale także bardzo komfortowy.",
                "category_banner_id" => 5,
            ],
        ];

        DB::table('banners')->truncate();

        DB::table('banners')->insertOrIgnore($banners);
    }
}
