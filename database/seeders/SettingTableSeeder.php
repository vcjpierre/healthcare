<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logoUrl = ('assets/image/infycare-logo.png');
        $favicon = ('assets/image/infyCare-favicon.ico');

        Setting::create(['key' => 'clinic_name', 'value' => 'Healthcare']);
        Setting::create(['key' => 'contact_no', 'value' => '1234567890']);
        Setting::create(['key' => 'email', 'value' => 'healthcare@email.com']);
        Setting::create(['key' => 'specialities', 'value' => '1']);
        Setting::create(['key' => 'currency', 'value' => '1']);
        Setting::create([
            'key' => 'address_one', 'value' => 'Santa Cruz de la Sierra, Bolivia.',
        ]);
        Setting::create([
            'key' => 'address_two', 'value' => 'Santa Cruz de la Sierra, Bolivia.',
        ]);
        Setting::create(['key' => 'country_id', 'value' => '101']);
        Setting::create(['key' => 'state_id', 'value' => '12']);
        Setting::create(['key' => 'city_id', 'value' => '1041']);
        Setting::create(['key' => 'postal_code', 'value' => '394101']);
        Setting::create(['key' => 'logo', 'value' => $logoUrl]);
        Setting::create(['key' => 'favicon', 'value' => $favicon]);
        Setting::create(['key' => 'region_code', 'value' => '91']);
    }
}
