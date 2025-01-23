<?php

namespace Database\Seeders;

use App\Models\Seedling;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeedlingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seedling::factory(30)->create();
    }
}
