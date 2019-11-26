<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Sonhuynh',
            'email'=> '23@123.123',
            'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
            'id_hotel' => '0',
            'avatar' => 'posts/27.jpg',
            'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
            'phone_number'=> '0373205443',
            'is_admin' => true,'id_hotel'=>1,
            'id_permission' => '1',
            'verify' => true
            ],
            [
                'name' => 'vinhlee',
                'email'=> 'vinh@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '0',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0339222265',
                'is_admin' => true,'id_hotel'=>1,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'điểu hải',
                'email'=> 'hai@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '0',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909123123',
                'is_admin' => true,'id_hotel'=>1,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'thúy phượng',
                'email'=> 'phuong@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '0',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909123456',
                'is_admin' => true,'id_hotel'=>1,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'aa',
                'email'=> 'aa@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '1',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909111333',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'bb',
                'email'=> 'bb@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '2',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909101010',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'cc',
                'email'=> 'cc@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '3',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909121212',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'dd',
                'email'=> 'dd@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '4',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909131313',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'ee',
                'email'=> 'ee@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '5',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909141414',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'ff',
                'email'=> 'ff@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '6',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909151515',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'gg',
                'email'=> 'gg@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '7',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'hh',
                'email'=> 'hh@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '8',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'ii',
                'email'=> 'ii@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '1',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'kk',
                'email'=> 'kk@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '2',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'll',
                'email'=> 'll@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '3',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'mm',
                'email'=> 'mm@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '4',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
            [
                'name' => 'nn',
                'email'=> 'nn@gmail.com',
                'password'=>'$2y$10$egpKAKvCPvY4jGh5Qy6G0uqWYWhxu8/L2Hz/KkIMIn4aDrPvSUMVO',
                'id_hotel' => '5',
                'avatar' => 'posts/27.jpg',
                'about_me' => 'Chao xìn tất cả các bạn, Đây là mô tả dome về bản thân của tôi, rất vui khi bạn đã đọc được những dòng này',
                'phone_number'=> '0909161616',
                'is_admin' => false,
                'id_permission' => '1',
                'verify' => true
            ],
       ]);
    }
}
