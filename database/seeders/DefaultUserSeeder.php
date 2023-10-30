<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialization;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory(1000)->create();

        // $users = [
        //     [
        //         'first_name' => 'Super',
        //         'last_name' => 'Admin',
        //         'contact' => '1234567890',
        //         'gender' => User::MALE,
        //         'type' => User::ADMIN,
        //         'email' => 'admin@healthcare.com',
        //         'email_verified_at' => Carbon::now(),
        //         'password' => Hash::make('123456'),
        //         'region_code' => '591',
        //     ],
        //     [
        //         'first_name' => 'Bruno',
        //         'last_name' => 'Rodriguez',
        //         'contact' => '1234567890',
        //         'gender' => User::MALE,
        //         'type' => User::DOCTOR,
        //         'email' => 'doctor@healthcare.com',
        //         'email_verified_at' => Carbon::now(),
        //         'password' => Hash::make('123456'),
        //         'region_code' => '591',
        //     ],
        //     [
        //         'first_name' => 'Juan',
        //         'last_name' => 'Mercado',
        //         'contact' => '1234567890',
        //         'gender' => User::MALE,
        //         'type' => User::PATIENT,
        //         'email' => 'paciente@healthcare.com',
        //         'email_verified_at' => Carbon::now(),
        //         'password' => Hash::make('123456'),
        //         'region_code' => '591',
        //     ],
        // ];

        // foreach ($users as $key => $user) {
        //     $user = User::create($user);
        //     if ($key == 1) {
        //         $doctor = Doctor::create(['user_id' => $user->id]);
        //         $user->address()->create(['owner_id' => $user->id]);
        //     }
        //     if ($key == 2) {
        //         $patient = Patient::create(['user_id' => $user->id, 'patient_unique_id' => 'UNIQUE12']);
        //         $patient->address()->create(['owner_id' => $patient['user_id']]);
        //     }
        // }

        // $specializationIds = Specialization::pluck('id');
        // $doctor->specializations()->sync($specializationIds);
    }
}
