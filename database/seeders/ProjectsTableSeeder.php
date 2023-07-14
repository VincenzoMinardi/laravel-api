<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = Technology::all()->pluck('id');

        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->type_id = rand(1, 50);
            $project->title = $faker->word();
            $project->date = $faker->dateTime();
            $project->description = $faker->paragraph();
            $project->name = $faker->firstName();
            $project->surname = $faker->lastName();

            $project->save();

            $project->technologies()->sync($faker->randomElements($technologies, null));
        }
    }
}
