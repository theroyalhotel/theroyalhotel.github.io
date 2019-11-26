<?php

use Illuminate\Database\Seeder;

class Bill_DetailTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_detail')->insert([
            ['id_room' => '1', 'no_room'=>'101','vip'=>'0','no_bed'=>'3','no_slot'=>'5', 'price'=>'150000', 'id_bill' =>'1'],
            ['id_room' => '2', 'no_room'=>'102','vip'=>'1','no_bed'=>'2','no_slot'=>'3', 'price'=>'200000', 'id_bill' =>'1'],
        ]);
    }
}
