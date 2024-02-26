<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        technology :: factory()
            ->count(10)
            ->create()
            ->each(function ($technology) {
            
                $projects = project :: inRandomOrder() -> limit(3) -> get();
                $technology -> projects() -> attach($projects);
                $technology -> save();
            });
    }
}
