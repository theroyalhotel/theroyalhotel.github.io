<?php

use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email')->insert([
            [
            'name' => 'Nguyễn Văn A',
             'email_address' => 'nguyenvana@gmail.com',
             'phone' => '0909159159',
             'subject' => 'Tôi muốn đặt 10 phòng vào ngày 22/12 tới!',
             'message'=>'Tôi muốn đặt 10 phòng vào ngày 22/12 tới! cho 50 nhân viên của tôi hy vọng quý khách sạn có thể tư vấn cho tôi qua số đệm thoại trên!',
             'hotel' => 1,
             'status' => 0,
             'categories' => 0,
            ],
            [
             'name' => 'Lê Bá Đạo',
             'email_address' => 'lebaodao@gmail.com',
             'phone' => '0909159156',
             'subject' => 'Tôi muốn mua hotel của quý vị !',
             'message'=>'Tôi muốn mua hotel của quý vị ! Tôi cần liên hệ ai để có thể thực hiện mong muốn của mình',
             'hotel' => 2,
             'status' => 1,
             'categories' => 0
            ],
            [
             'name' => 'Lê Thị B',
             'email_address' => 'lethijb@gmail.com',
             'phone' => '0909159156',
             'subject' => 'Tôi Cần tư vấn',
             'message'=>'Không biết giá cả và chất lượng dịch vụ của quý khách sạn như thế nào, tôi muốn đặt 20 phòng vào ngày 12/12 tới!',
             'hotel' => 3,
             'status' => 2,
             'categories' => 1
            ],
            [
                'name' => 'Trần Văn Cơ',
                'email_address' => 'tranvancogmail.com',
                'phone' => '',
                'subject' => 'Tôi muốn đặt 100 phòng trong hai ngày',
                'message'=>'Tôi muốn đặt 100 phòng trong hai ngày , tôi không ở thuê cho vui thông tại nhà không có gì ngoài tiền không biết tiêu vào đâu cho hết',
                'hotel' => 5,
                'status' => 3,
                'categories' => 2
            ],
            [
                'name' => 'Thị Tý',
                'email_address' => 'thitygmail.com',
                'phone' => '',
                'subject' => 'Quảng cáo ',
                'message'=>'Quảng bá khách sạn được hiểu là hoạt động tiếp thị được thực hiện trực tuyến nhằm tiếp cận gần hơn với một lượng lớn đối tượng khách hàng nhằm phục vụ và làm thỏa mãn nhu cầu của khách hàng liên quan đến lĩnh vực đặt phòng khách sạn.',
                'hotel' => 4,
                'status' => 2,
                'categories' => 3
            ],
            [
                'name' => 'Lê Thị Tý',
                'email_address' => 'lethitygmail.com',
                'phone' => '',
                'subject' => 'Quảng cáo ',
                'message'=>'Quảng bá khách sạn được hiểu là hoạt động tiếp thị được thực hiện trực tuyến nhằm tiếp cận gần hơn với một lượng lớn đối tượng khách hàng nhằm phục vụ và làm thỏa mãn nhu cầu của khách hàng liên quan đến lĩnh vực đặt phòng khách sạn.',
                'hotel' => 4,
                'status' => 2,
                'categories' => 3
            ]
        ]);
    }
}
