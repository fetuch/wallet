<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = "INSERT INTO `resources` (`name`, `type`, `created_at`, `updated_at`) VALUES
('PLN', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('THB', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('USD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('AUD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('HKD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('CAD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('NZD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('SGD', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('EUR', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('HUF', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('CHF', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('GBP', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('UAH', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('JPY', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('CZK', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('DKK', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('ISK', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('NOK', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('SEK', 'fiat currency', '2020-12-07 22:43:20', '2020-12-07 22:43:20'),
('HRK', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('RON', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('BGN', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('TRY', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('ILS', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('CLP', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('PHP', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('MXN', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('ZAR', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('BRL', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('MYR', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('RUB', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('IDR', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('INR', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('KRW', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('CNY', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('XDR', 'fiat currency', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('gold', 'precious metal', '2020-12-07 22:43:21', '2020-12-07 22:43:21'),
('silver', 'precious metal', '2020-12-07 22:43:21', '2020-12-07 22:43:21');";

        DB::statement($query);

        \App\Models\Valuation::create([
            'resource_id' => 1,
            'date' => now(),
            'amount' => 1
        ]);
    }
}
