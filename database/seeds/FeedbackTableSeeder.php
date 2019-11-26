<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback')->insert([
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Chi Vinh',
                'hotelId' => 1,
                'message'=>'Chất lượng dịch vụ rất tốt!Thực đơn Bữa sáng và trà được thay đổi thường xuyên. Nhân viên phục vụ nhiệt tình chu đáo. Phòng được bài trí chỉ đẹp mắt và đầy đủ tiện nghi. ',
            ],
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Thuy Phuong',
                'hotelId' => 2,
                'message'=>'Vị trí khá thuận tiện. Gần bến xe, chợ bên thành, tttm.. Phòng xink ấm cúng. Nhân viên siêu nhiệt tình và thân thiện...ks còn tặng ống hút tre làm quà lưu niệm. Bữa sáng ăn khá hợp miệng. Lần tới sẽ quay lại. ',
            ], 
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Huynh Son',
                'hotelId' => 3,
                'message'=>'Service was fantastic, staff were very helpful and attentive to my needs. Food was lovely especially the buffet laid out for afternoon tea',
            ],
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Dieu Hai',
                'hotelId' => 2,
                'message'=>'Khách sạn mới, vị trí trung tâm, view trên sân thượng khá đẹp, decor dễ chịu, phòng xinh xắn và tiện nghi, giường rộng, êm rất thích. Xung quanh khách sạn có nhiều quán, cửa hàng tiện lợi',
            ],
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Chi Vinh',
                'hotelId' => 1,
                'message'=>'Chất lượng dịch vụ rất tốt!Thực đơn Bữa sáng và trà được thay đổi thường xuyên. Nhân viên phục vụ nhiệt tình chu đáo. Phòng được bài trí chỉ đẹp mắt và đầy đủ tiện nghi. ',
            ],
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Thuy Phuong',
                'hotelId' => 2,
                'message'=>'Vị trí khá thuận tiện. Gần bến xe, chợ bên thành, tttm.. Phòng xink ấm cúng. Nhân viên siêu nhiệt tình và thân thiện...ks còn tặng ống hút tre làm quà lưu niệm. Bữa sáng ăn khá hợp miệng. Lần tới sẽ quay lại. ',
            ], 
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Huynh Son',
                'hotelId' => 3,
                'message'=>'Service was fantastic, staff were very helpful and attentive to my needs. Food was lovely especially the buffet laid out for afternoon tea',
            ],
            [
                'check' => 1,
                'approve' => 1,
                'name' => 'Dieu Hai',
                'hotelId' => 2,
                'message'=>'Khách sạn mới, vị trí trung tâm, view trên sân thượng khá đẹp, decor dễ chịu, phòng xinh xắn và tiện nghi, giường rộng, êm rất thích. Xung quanh khách sạn có nhiều quán, cửa hàng tiện lợi',
            ],
            [
                'check' => 1,
                'approve' =>0,
                'name' => 'Dieu Hai',
                'hotelId' => 2,
                'message'=>'Khách sạn mới, vị trí trung tâm, view trên sân thượng khá đẹp, decor dễ chịu, phòng xinh xắn và tiện nghi, giường rộng, êm rất thích. Xung quanh khách sạn có nhiều quán, cửa hàng tiện lợi',
            ],
            [
                'check' => 0,
                'approve' => 0,
                'name' => 'Thuy Phuong',
                'hotelId' => 2,
                'message'=>null,
            ], 
            [
                'check' => 0,
                'approve' => 0,
                'name' => 'Huynh Son',
                'hotelId' => 3,
                'message'=>null,
            ],
            [
                'check' => 0,
                'approve' => 0,
                'name' => 'Dieu Hai',
                'hotelId' => 2,
                'message'=>null,
            ],
        ]);
    }
}
