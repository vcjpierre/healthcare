<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class DefaultServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Dentista',
            ],
            [
                'name' => 'Médicos generales',
            ],
            [
                'name' => 'Fisioterapia',
            ],
            [
                'name' => 'Psicólogo',
            ],
        ];

        foreach ($input as $data) {
            ServiceCategory::create($data);
        }
    }
}
