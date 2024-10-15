<?php

namespace Database\Seeders;

use App\Models\Puesto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Puesto::factory(10)->create();
    }
}
