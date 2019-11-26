<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            ['name_place' => 'TPHCM'],
            ['name_place' => 'Đà Lạt'],
            ['name_place' => 'Vũng Tàu'],
            ['name_place' => 'Đồng Nai'],
            ['name_place' => 'Bình Thuận'],
            ['name_place' => 'Tây Ninh'],
        ]);
    }
}
