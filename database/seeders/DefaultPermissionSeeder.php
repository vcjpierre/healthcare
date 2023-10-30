<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DefaultPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'manage_doctors',
                'display_name' => 'Gestionar medicos',
            ],
            [
                'name' => 'manage_patients',
                'display_name' => 'Gestionar pacientes',
            ],
            [
                'name' => 'manage_appointments',
                'display_name' => 'Gestionar citas',
            ],
            [
                'name' => 'manage_patient_visits',
                'display_name' => 'Gestionar visitas de pacientes',
            ],
            [
                'name' => 'manage_staff',
                'display_name' => 'Gestionar personal',
            ],
            [
                'name' => 'manage_doctor_sessions',
                'display_name' => 'Gestionar las sesiones médicas',
            ],
            [
                'name' => 'manage_settings',
                'display_name' => 'Gestionar ajustes',
            ],
            [
                'name' => 'manage_services',
                'display_name' => 'Gestionar servicios',
            ],
            [
                'name' => 'manage_specialities',
                'display_name' => 'Gestionar especialidades',
            ],
            [
                'name' => 'manage_countries',
                'display_name' => 'Gestionar paises',
            ],
            [
                'name' => 'manage_states',
                'display_name' => 'Gestionar estados',
            ],
            [
                'name' => 'manage_cities',
                'display_name' => 'Gestionar ciudades',
            ],
            [
                'name' => 'manage_roles',
                'display_name' => 'Gestionar roles',
            ],
            [
                'name' => 'manage_currencies',
                'display_name' => 'Gestionar monedas',
            ],
            [
                'name' => 'manage_admin_dashboard',
                'display_name' => 'Gestionar Admin Dashboard',
            ],
            [
                'name' => 'manage_front_cms',
                'display_name' => 'Gestionar Front',
            ],
            [
                'name' => 'manage_transactions',
                'display_name' => 'Gestionar transacciones',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
