<?php

use Illuminate\Database\Seeder;

class CatagoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('catagories')->insert([[
                'name' => 'Travel'
            ],
            [
                'name' => 'Technology',
            ],
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Science',
            ],
           ]);
            
        }
    }
}
