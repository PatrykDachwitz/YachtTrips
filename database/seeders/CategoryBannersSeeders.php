<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBannersSeeders extends Seeder
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
                "name" => "Odkryj Magię Oceanów",
                "description" => "Czy jesteś gotów na niezapomnianą przygodę? Skorzystaj z naszych atrakcyjnych ofert i pozwól, by eksploracja niezwykłych miejsc na oceanie stała się dla Ciebie rzeczywistością! 🌊✨ Nie zwlekaj, zarezerwuj teraz i rozpocznij swoją wyjątkową podróż przez fascynujący świat oceanów!",
                'template_id' => 2
            ], [
                "id" => 3,
                "name" => "Odkryj Perły Naszej Floty",
                "description" => "Witaj wśród naszych najbardziej popularnych jachtów, prawdziwych pereł naszej floty. Każdy z nich to wyjątkowa kombinacja elegancji, komfortu i morskich przygód, zapewniająca niezapomniane chwile na otwartym morzu. Poznaj nasze gwiazdy floty i zanurz się w wyjątkowym doświadczeniu, które tylko one mogą zaoferować.",
                'template_id' => 3
            ], [
                "id" => 4,
                "name" => "Dlaczego my",
                "description" => null,
                'template_id' => 4
            ], [
                "id" => 5,
                "name" => "Dołącz do Grona Naszych Zachwyconych Klientów",
                "description" => "Możesz dołączyć do grona naszych zachwyconych klientów, którzy odkryli piękno oceanicznych przygód z nami. Dołącz do nas i zanurz się w doświadczeniu, które z pewnością stanie się dla Ciebie niezapomnianym wspomnieniem.",
                'template_id' => 6
            ],
        ];


        DB::table('category_banners')->truncate();
        DB::table('category_banners')->insertOrIgnore($category);
    }
}
