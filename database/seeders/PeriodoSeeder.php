<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periodo::factory()->count(10)->create();
    }
}
