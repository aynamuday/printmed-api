<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role' => 'super admin',
            'personnel_number' => 'PN-0000001',
            'full_name' => 'Juan Dela Cruz',
            'first_name' => 'Juan',
            'last_name' => 'Dela Cruz',
            'sex' => 'Female',
            'birthdate' => '2003-02-19',
            'email' => 'superadmin1@gmail.com',
            'password' => 'Pass12**',
        ]);

        User::create([
            'role' => 'physician',
            'personnel_number' => 'PN-0000002',
            'full_name' => 'Maria Santos',
            'first_name' => 'Maria',
            'last_name' => 'Santos',
            'sex' => 'Female',
            'birthdate' => '2003-08-09',
            'email' => 'physician1@gmail.com',
            'password' => 'Pass12**',
            'department_id' => 1
        ]);

        User::create([
            'role' => 'secretary',
            'personnel_number' => 'PN-0000003',
            'full_name' => 'Ana Garcia',
            'first_name' => 'Ana',
            'last_name' => 'Garcia',
            'sex' => 'Female',
            'birthdate' => '2002-01-07',
            'email' => 'secretary1@gmail.com',
            'password' => 'Pass12**',
            'department_id' => 1
        ]);

        User::create([
            'role' => 'physician',
            'personnel_number' => 'PN-0000004',
            'full_name' => 'Sofia Castro',
            'first_name' => 'Sofia',
            'last_name' => 'Castro',
            'sex' => 'Female',
            'birthdate' => '2003-11-06',
            'email' => 'physician2@gmail.com',
            'password' => 'Pass12**',
            'department_id' => 2
        ]);
        
        User::create([
            'role' => 'admin',
            'personnel_number' => 'PN-0000005',
            'full_name' => 'Diego Lopez',
            'first_name' => 'Diego',
            'last_name' => 'Lopez',
            'sex' => 'Male',
            'birthdate' => '2003-02-10',
            'email' => 'admin1@gmail.com',
            'password' => 'Pass12**'
        ]);
    }
}
