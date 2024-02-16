<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il Model

use App\Models\Cartoon;

// importo la factory 

use Database\Factories\CartoonFactory;

class CartoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // Il model va scritto al singolare e senza Model
    {   
        Cartoon::factory () -> count (42) -> create();
    }
}
