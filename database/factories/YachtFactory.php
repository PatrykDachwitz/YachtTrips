<?php
declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Yacht>
 */
class YachtFactory extends Factory
{
    const YACHTS_TRIP = [
        "Oceanic Dream",
        "Morska Wędrowiec",
        "Srebrny żeglarz",
        "Perła Bałtyku",
        "Fregata Wiatrów",
        "Korona Morza",
        "Szmaragdowa Perła",
        "Błękitny Odrobina",
        "Księżycowy Żagiel",
        "Perełkowy Statek",
        "Imperator Morza",
        "Żeglarska Harmonia",
        "Morze Nieograniczonych Możliwości",
        "Słoneczny Horyzont",
        "Mistral Magiczny",
        "Odgłosy Oceanu",
        "Mewy i Żagle",
        "Fala Wolności",
        "Jachtowym Szlakiem",
        "Wiatr w Żaglach",
        "Morze Marzeń",
        "Jacht Polarny",
        "Bałtyckie Złoto",
        "Jutrzenka",
        "Rafa Koralowa",
        "Wicher Nadziei",
        "Baśniowy Statek",
        "Morska Opowieść",
        "Tajemniczy Sekret",
        "Radość na Falach",
        "Niebieski Orzeł",
        "Wodny Eldorado",
        "Zatoka Czarów",
        "Makaronowe Żagle",
        "Jacht Odkrywców",
        "Żeglarstwo Rajskie",
        "Północne Słońce",
        "Bałtycka Syrenka",
        "Lazurowe Wybrzeże",
        "Moc Ukojenia",
        "Jachtowy Esencjał",
        "Bryza Nadziei",
        "Roztańczona Fala",
        "Żeglarska Przygoda",
        "Wyspa Marzeń",
        "Magiczny Wiatr",
        "Bałtycka Burza",
        "Żeglarski Koncert",
        "Oceaniczne Łowy",
        "Słońce nad Żaglami",
        "Wiatr Wschodzącego Słońca",
        "Żeglarska Fantazja",
        "Fala Inspiracji",
        "Bałtyckie Ciepło",
        "Śródziemnomorska Przyjemność",
        "Wakacje pod Żaglami",
        "Jacht na Wschodzie",
        "Bałtycki Radosny Rejs",
        "Perełkowe Zachody",
        "Morze i Jacht",
        "Wietrzna Podróż",
        "Bryzgi Nadziei",
        "Wiatr Zmian",
        "Żeglowanie w Raju",
        "Bałtycki Uśmiech",
        "Radość Morza",
        "Słoneczny Rejs",
        "Wodna Wolność",
        "Podróżnik na Żaglach",
        "Bałtyckie Marzenie",
        "Żeglowanie w Nieznane",
        "Jachtowe Opowieści",
        "Jachtowy Eldorado",
        "Morze Przygód",
        "Żeglarskie Armatki"
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => self::YACHTS_TRIP[array_rand(self::YACHTS_TRIP)],
            'places_available' => rand(20, 500),
        ];
    }
}
