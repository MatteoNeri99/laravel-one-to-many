<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $projects = [
            [
                'title' => 'london-trip',
                'date' => '2024-04-02',
                'description' => 'progetto in html e css',
                'image' => 'img/viaggioLondra.png'
            ],

            [
                'title' => 'campominato',
                'date' => '2024-05-18',
                'description' => 'progetto in js',
                'image' => 'img/campominato.png'

            ],

            [
                'title' => 'boolzapp',
                'date' => '2024-05-31',
                'description' => 'progetto in vue-js',
                'image' => 'img/boolzapp.png'

            ],

            [
                'title' => 'laravel-comics',
                'date' => '2024-07-15',
                'description' => 'progetto in laravel',
                'image' => 'img/dc-comics.png'

            ],


        ];
        $types = Type::all()->pluck('id');
        foreach ($projects as $project ) {

            $newProject= new Project();
            $newProject->type_id = fake()->randomElement($types);
            $newProject->title = $project['title'];
            $newProject->date = $project['date'];
            $newProject->description= $project['description'];
            $newProject->image = fake()->imageUrl();
            $newProject->save();

        };


    }
}
