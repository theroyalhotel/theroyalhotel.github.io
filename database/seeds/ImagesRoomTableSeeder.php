<?php

use Illuminate\Database\Seeder;

class ImagesRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images_room')->insert([
            ['img' => '1.jpg', 'id_room'=>'1'],
            ['img' => '2.jpg', 'id_room'=>'1'],
            ['img' => '3.jpg', 'id_room'=>'1'],
            ['img' => '4.jpg', 'id_room'=>'2'],
            ['img' => '5.jpg', 'id_room'=>'2'],
        ]);
    }
}
