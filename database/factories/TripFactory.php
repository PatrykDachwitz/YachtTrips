<?php
declare(strict_types=1);
namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    const TRIPS_NAME = [
        "Przez karaibskie atole",
        "Wyprawa wzdłuż wybrzeża Grecji",
        "Pod słońcem Włoch",
        "Eksploracja egzotycznych wysp Azji Południowo-Wschodniej",
        "Safari po chorwackich zatokach",
        "Odkrywanie skarbów Morza Śródziemnego",
        "Żeglarska podróż dookoła Bałtyku",
        "Rejs po egzotycznych wyspach Pacyfiku",
        "Wyprawa do norweskich fiordów",
        "Żeglarskie spotkanie z Antarktydą",
        "Jachtowa wyprawa na Karaiby",
        "Morze Północne: szlak wikingów",
        "Rejs po Zatoce Meksykańskiej",
        "Podróż przez egipskie wody",
        "Szlak żeglarski pośród greckich wysp",
        "Odkrywanie przyjemności Morza Czerwonego",
        "Wakacje pod żaglami w Chorwacji",
        "Rejs dookoła Majorki",
        "Żeglarstwo na Wyspach Kanaryjskich",
        "Wodne przygody wzdłuż wybrzeża Australii",
        "Morze Bałtyckie: perełka Europy",
        "Wyprawa na hiszpańskie wybrzeże",
        "Żeglarski raj na wyspach Bali",
        "Rejs wzdłuż włoskiego wybrzeża",
        "Egipska wyprawa po Nilu",
        "Wiatr w żaglach na tureckim wybrzeżu",
        "Wyprawa na hawajskie wysepki",
        "Podróże po fiordach Norwegii",
        "Rejs na portugalskie wybrzeże",
        "Żeglarski rejs dookoła Wysp Brytyjskich",
        "Przejażdżka po malowniczych szkockich jeziorach",
        "Morze Adriatyckie: perła południowej Europy",
        "Wyprawa na włoskie wyspy",
        "Podróże po słonecznej Grecji",
        "Jachtowe zwiedzanie wybrzeża Francji",
        "Żeglarski rejs po Morzu Bałtyckim",
        "Przygoda na południowoafrykańskich wodach",
        "Rejs na chorwackie wyspy",
        "Wakacje na Morzu Śródziemnym",
        "Żeglarstwo na słynnej riwierze francuskiej",
        "Wyprawa na egzotyczne Seszele",
        "Rejs po turkusowych wodach Malty",
        "Podróż do greckich archipelagów",
        "Żeglarski rejs pośród japońskich wysp",
        "Przygoda na amerykańskim wybrzeżu",
        "Rejs na malediwskie atole",
        "Żeglarska wyprawa na Wyspy Kanaryjskie",
        "Podróże po fińskich zatokach",
        "Żeglarstwo wzdłuż hiszpańskiego wybrzeża",
        "Rejs dookoła Korsyki",
        "Wyprawa na Bahamy",
        "Żeglarskie odkrywanie irlandzkich wybrzeży",
        "Podróże na Morze Śródziemne",
        "Rejs na jamajskie wybrzeże",
        "Żeglarska przygoda na helsińskich wodach",
        "Wycieczka do bułgarskiego wybrzeża",
        "Żeglarstwo na francuskim wybrzeżu",
        "Rejs na kubańskie wysepki",
        "Podróże na greckie wyspy",
        "Wyprawa na egipskie wody Morza Czerwonego",
        "Żeglarskie odkrywanie włoskich wybrzeży",
        "Rejs na hiszpańskie wybrzeże",
        "Żeglarska wyprawa na Chorwację",
        "Podróże po słonecznej Portugalii",
        "Rejs na malownicze wyspy Filipin",
        "Żeglarstwo na malediwskich atolach",
        "Wyprawa do japońskich archipelagów",
        "Żeglarskie zwiedzanie hawajskich wysepek",
        "Rejs na portugalskie wybrzeże",
        "Podróże na malediwskie atole",
        "Żeglarska wyprawa na Wyspy Kanaryjskie",
        "Przygoda po fińskich zatokach",
        "Rejs wzdłuż hiszpańskiego wybrzeża",
        "Żeglarstwo dookoła Korsyki",
        "Wyprawa na Bahamy",
        "Żeglarskie odkrywanie irlandzkich wybrzeży",
        "Podróże na Morze Śródziemne",
        "Rejs na jamajskie wybrzeże",
        "Żeglarska przygoda na wodach Helsinek",
        "Wycieczka do bułgarskiego wybrzeża",
        "Żeglarstwo na wybrzeżu Francji",
        "Rejs na kubańskie wysepki",
        "Podróże na greckie wyspy",
        "Wyprawa na egipskie wody Morza Czerwonego",
        "Żeglarskie odkrywanie włoskich wybrzeży",
        "Rejs na hiszpańskie wybrzeże",
        "Żeglarska wyprawa na Chorwację",
        "Podróże po słonecznej Portugalii"
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $currentName = self::TRIPS_NAME[array_rand(self::TRIPS_NAME)];
        $firstDayTrip = rand(5, 12);
        $lastDayTrip = (rand(5, 12) + $firstDayTrip);

        return [
            'name' => $currentName,
            'start_day' => Carbon::now()->addDays($firstDayTrip),
            'end_day' => Carbon::now()->addDays($lastDayTrip),
            'yacht_id' => rand(1, 14),
            'ocean_id' => rand(1, 14),
            'template_id' => rand(1, 14),
            'count_day' => ($lastDayTrip - $firstDayTrip),
            'price_adult' => rand(100, 500),
            'price_kids' => rand(10, 200),
            'slug' => Str::slug($currentName),
        ];
    }
}
