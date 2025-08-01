<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
    ['id' => 1, 'name' => 'Selina', 'class' => '10A'],
    ['id' => 2, 'name' => 'Ika', 'class' => '10B'],
    ['id' => 3, 'name' => 'Marcel', 'class' => '11A'],
]);

    }
}
