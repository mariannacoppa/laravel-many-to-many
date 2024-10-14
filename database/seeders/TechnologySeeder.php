<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = ['HTML', 'CSS', 'JS', 'VueJS', 'PHP', 'Laravel', 'MySQL'];
        
        foreach($techs as $tech){
            $technology = new Technology();
            $technology->name = $tech;
            $technology->slug = Technology::generateSlug($tech);
            $technology->save();
        }
    }
}
