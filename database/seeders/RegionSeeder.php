<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Region::create([
            'name'=>'Northern'
        ]);

        Region::create([
            'name'=>'Central'
        ]);

        Region::create([
            'name'=>'Southern'
        ]);
    }
}
