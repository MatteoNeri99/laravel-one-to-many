<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesName=[
            'front-end',
            'back-end',
            'full-stack',

        ];

        foreach ($typesName as $typeName){
            $type= new Type();
            $type->name= $typeName;
            $type->save();

        }

    }
}
