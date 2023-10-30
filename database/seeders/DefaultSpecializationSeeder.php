<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Seeder;

class DefaultSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
            [
                'name' => 'Anestesiologo pediatrico',
            ],
            [
                'name' => 'Cardiologo pediatrico',
            ],
            [
                'name' => 'Dentista pediatrico',
            ],
            [
                'name' => 'Neurologo infantil',
            ],
            [
                'name' => 'Oncologo pediatrico',
            ],
            [
                'name' => 'Neumólogo pediatrico',
            ],
            [
                'name' => 'Hematólogo',
            ],
            [
                'name' => 'Nefrólogo',
            ],
            [
                'name' => 'Endocrino',
            ],
            [
                'name' => 'Otorrinolaringólogo',
            ],
        ];

        foreach ($input as $data) {
            Specialization::create($data);
        }
    }
}
