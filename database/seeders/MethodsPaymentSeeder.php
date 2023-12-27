<?php
declare(strict_types=1);
namespace Database\Seeders;

use App\Models\MethodPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MethodsPaymentSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $availablePayments = [
            [
                "id" => 1,
                "name" => "PayPal",
                "price" => 0,
                "url_payment" => route('method_payments.show', [
                    'method_payment' => 1
                ]),
            ], [
                "id" => 2,
                "name" => "Przelew na konto",
                "price" => 0,
                "url_payment" => route('method_payments.show', [
                    'method_payment' => 2
                ]),
            ], [

                "id" => 3,
                "name" => "PayU",
                "price" => 10,
                "url_payment" => route('method_payments.show', [
                    'method_payment' => 3
                ]),
            ]
        ];

        DB::table('method_payments')->truncate();
        DB::table('method_payments')->insert($availablePayments);
    }
}
