<?php
declare(strict_types=1);
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MethodPayment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GeneratedBanners::class);
        $this->call(File::class);
        $this->call(Pages::class);
        $this->call(Trips::class);
        $this->call(Yacht::class);
        $this->call(Ocean::class);
        $this->call(TripsRooms::class);
        $this->call(Gallery::class);

        DB::table('method_payments')->truncate();

        MethodPayment::factory()->create([
            "id" => 1,
            "url_payment" => route('method_payments.show', [
                'method_payment' => 1
            ]),
        ]);
        MethodPayment::factory()->create([
            "id" => 2,
            "url_payment" => route('method_payments.show', [
                'method_payment' => 2
            ]),
        ]);
        MethodPayment::factory()->create([
            "id" => 3,
            "url_payment" => route('method_payments.show', [
                'method_payment' => 3
            ]),
        ]);
    }
}
