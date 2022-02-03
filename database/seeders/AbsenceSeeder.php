<?php

namespace Database\Seeders;

use App\Models\Absence;
use Illuminate\Database\Seeder;

class AbsenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Absence::create([
            'employee_code' => 'IP06001',
            'absence_date' => '2020-08-02',
            'duration' => 2,
            'description' => 'Acara Keluarga',
        ]);

        Absence::create([
            'employee_code' => 'IP06001',
            'absence_date' => '2020-08-18',
            'duration' => 2,
            'description' => 'Anak Sakit',
        ]);

        Absence::create([
            'employee_code' => 'IP06006',
            'absence_date' => '2020-08-19',
            'duration' => 1,
            'description' => 'Nenek Sakit',
        ]);

        Absence::create([
            'employee_code' => 'IP06007',
            'absence_date' => '2020-08-23',
            'duration' => 1,
            'description' => 'Sakit',
        ]);

        Absence::create([
            'employee_code' => 'IP06004',
            'absence_date' => '2020-08-29',
            'duration' => 5,
            'description' => 'Menikah',
        ]);

        Absence::create([
            'employee_code' => 'IP06003',
            'absence_date' => '2020-08-30',
            'duration' => 2,
            'description' => 'Acara Keluarga',
        ]);
    }
}
