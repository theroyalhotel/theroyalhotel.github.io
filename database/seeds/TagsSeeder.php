<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([[
            'name' => 'Hotel'
        ],
        [
            'name' => 'Travel',
        ],
        [
            'name' => 'Restaurant',
        ],
        [
            'name' => 'Sport',
        ],
        [
            'name' => 'Trip',
        ],
        [
            'name' => 'School',
        ]]);
        
    }
}
