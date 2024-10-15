<?php

namespace Database\Seeders;

use App\Models\Plaza;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plaza::factory(10)->create();
    }
}
