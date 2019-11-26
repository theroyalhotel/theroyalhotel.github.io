<?php

use Illuminate\Database\Seeder;

class BillTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            ['id_hotel' => '1', 'status'=>'0','name'=>'Thành Long', 'email'=>'long@gmail.com','phone'=>'0909123123','checkin'=>'2019-11-08','checkout'=>'2019-11-20','days'=>'2','totalall'=>'500000','note'=>'aa'],
            ['id_hotel' => '1', 'status'=>'1','name'=>'Chung Tử Đơn', 'email'=>'don@gmail.com','phone'=>'0909124124','checkin'=>'2019-11-20','checkout'=>'2019-11-30','days'=>'3','totalall'=>'500000','note'=>'abc'],
            ['id_hotel' => '1', 'status'=>'2','name'=>'Thành Long', 'email'=>'long@gmail.com','phone'=>'0909123123','checkin'=>'2019-11-08','checkout'=>'2019-11-20','days'=>'2','totalall'=>'500000','note'=>'aa'],
            ['id_hotel' => '1', 'status'=>'3','name'=>'Chung Tử Đơn', 'email'=>'don@gmail.com','phone'=>'0909124124','checkin'=>'2019-11-20','checkout'=>'2019-11-30','days'=>'3','totalall'=>'500000','note'=>'abc'],
        ]);
    }
}
