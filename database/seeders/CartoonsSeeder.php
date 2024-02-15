<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il Model

use App\Models\ComicsModel;

// importo la factory 

use Database\Factories\CartoonsFactory;

class CartoonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CartoonsFactory::factory () -> count (42) -> create();
    }
}
