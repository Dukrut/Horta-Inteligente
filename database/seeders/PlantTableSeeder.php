<?php

namespace Database\Seeders;

use App\Models\Plant;
use Database\Factories\PlantFactory;
use Illuminate\Database\Seeder;

class PlantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plant::factory()->count(10)->create();
    }
}
