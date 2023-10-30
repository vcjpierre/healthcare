<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class DefaultCurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'currency_name' => 'Boliviano',
                'currency_icon' => 'Bs',
                'currency_code' => 'BOB',
            ],
        ];

        foreach ($input as $data) {
            Currency::create($data);
        }
    }
}
