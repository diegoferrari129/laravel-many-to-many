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
        $technologies = ['Bootstrap 5', 'Vuejs', 'Laravel',];
        
        foreach($technologies as $technology){
            $new_technology = new Technology();

            $new_technology->name = $technology;
            $new_technology->slug = Technology::generateSlug($technology);

            $new_technology->save();
        }

    }
}
