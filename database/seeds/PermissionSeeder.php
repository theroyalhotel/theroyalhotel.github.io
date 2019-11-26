<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([[
            'name' => 'Admin'
        ],
        [
            'name' => 'Content Writer',
        ],
        [
            'name' => 'Contact',
        ],
        [
            'name' => 'Demo Permission',
        ]]);
    }
}
