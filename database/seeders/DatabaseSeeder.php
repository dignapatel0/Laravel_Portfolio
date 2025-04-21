<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Education::truncate();
        Project::truncate();
        Skill::truncate();
        Experience::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Education::factory()->count(2)->create();        
        Project::factory()->count(3)->create();
        Skill::factory()->count(6)->create(); 
        Experience::factory()->count(2)->create(); 
    }
}
