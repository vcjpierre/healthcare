<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DefaultRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'clinic_admin',
                'display_name' => 'Admin',
                'is_default' => true,
            ],
            [
                'name' => 'doctor',
                'display_name' => 'Doctor',
                'is_default' => true,
            ],
            [
                'name' => 'patient',
                'display_name' => 'Paciente',
                'is_default' => true,
            ],
        ];

        foreach ($roles as $role) {
            $roleExist = Role::whereName($role)->exists();
            if (! $roleExist) {
                Role::create($role);
            }
        }

        /** @var Role $adminRole */
        $adminRole = Role::whereName('clinic_admin')->first();

        /** @var User $user */
        $user = User::whereEmail('admin@healthcare.com')->first();

        $allPermission = Permission::pluck('name', 'id');
        $adminRole->givePermissionTo($allPermission);
        if ($user) {
            $user->assignRole($adminRole);
        }

        $doctorRole = Role::whereName('doctor')->first();
        $doctor = User::whereEmail('doctor@healthcare.com')->first();
        if ($doctor) {
            $doctor->assignRole($doctorRole);
        }

        $patientRole = Role::whereName('patient')->first();
        $doctor = User::whereEmail('paciente@healthcare.com')->first();
        if ($doctor) {
            $doctor->assignRole($patientRole);
        }
    }
}
