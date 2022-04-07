<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DefinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('definations')->insert([[
            'type' => "G",
            'name' => "Görevler",
        ]]);
        DB::table('definations')->insert([[
            'defination_id' => 1,
            'type' => "G",
            'name' => "Görev 1",
        ],[
            'defination_id' => 1,
            'type' => "G",
            'name' => "Görev 2",
        ],[
            'defination_id' => 1,
            'type' => "G",
            'name' => "Görev 3",
        ],[
            'defination_id' => 1,
            'type' => "G",
            'name' => "Görev 4",
        ]]);
    }
}
