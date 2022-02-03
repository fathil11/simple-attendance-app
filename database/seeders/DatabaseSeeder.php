<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fathil Arham',
            'email' => 'test@test.com',
            'password' => Hash::make('123123123')
        ]);

        $this->call([
            EmployeeSeeder::class,
            AbsenceSeeder::class,
        ]);
    }
}
