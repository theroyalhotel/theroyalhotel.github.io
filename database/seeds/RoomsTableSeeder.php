<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ['no_room' => '101', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'0','price'=>'160000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'170000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '1','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'150000','detail'=>'abcxyz','id_hotel'=>'1'],
            ['no_room' => '101', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'300000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'300000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'450000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'800000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '1','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'700000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'800000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'490000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'2'],
            ['no_room' => '101', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'310000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'780000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'750000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'3'],
            ['no_room' => '101', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'360000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'600000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'700000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'350000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'4'],
            ['no_room' => '101', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'310000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'780000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '301', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'750000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'5'],
            ['no_room' => '101', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'310000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'780000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'750000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'6'],
            ['no_room' => '101', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'310000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'780000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'750000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'7'],
            ['no_room' => '101', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'310000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '102', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'200000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '103', 'no_slot' => '1','no_bed' => '1','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'500000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '104', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'330000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '105', 'no_slot' => '2','no_bed' => '3','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'480000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '201', 'no_slot' => '8','no_bed' => '4','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'590000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '202', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room1.jpg','vip'=>'1','price'=>'550000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '203', 'no_slot' => '10','no_bed' => '5','avatar_room'=>'room2.jpg','vip'=>'0','price'=>'780000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '204', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'1','price'=>'390000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '205', 'no_slot' => '4','no_bed' => '4','avatar_room'=>'room4.jpg','vip'=>'0','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '301', 'no_slot' => '2','no_bed' => '2','avatar_room'=>'room5.jpg','vip'=>'1','price'=>'400000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '302', 'no_slot' => '3','no_bed' => '2','avatar_room'=>'room6.jpg','vip'=>'0','price'=>'410000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '303', 'no_slot' => '5','no_bed' => '3','avatar_room'=>'room1.jpg','vip'=>'0','price'=>'750000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '304', 'no_slot' => '4','no_bed' => '3','avatar_room'=>'room2.jpg','vip'=>'1','price'=>'340000','detail'=>'abcxyz','id_hotel'=>'8'],
            ['no_room' => '305', 'no_slot' => '3','no_bed' => '3','avatar_room'=>'room3.jpg','vip'=>'0','price'=>'380000','detail'=>'abcxyz','id_hotel'=>'8'],
        ]);
    }
}
