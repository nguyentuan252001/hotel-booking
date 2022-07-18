<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongSeeder extends Seeder
{

    public function run()
    {
        DB::table('phongs')->delete();

        DB::table('phongs')->truncate();

        DB::table('phongs')->insert([
            [
                'ma_phong' => 'Standard', 'gia_mac_dinh' => 2000000,
                'mo_ta_phong' => 'là loại phòng tiêu chuẩn, đơn giản nhất trong các khách sạn hiện nay. Đây là loại phòng có diện tích nhỏ, thường được đặt ở tầng thấp nhất và không có view hoặc view không được đẹp. Trang thiết bị của phòng standard cũng được khách sạn giảm tối thiểu. Chính vì vậy, giá phòng standard nằm ở mức thấp nhất trong các loại phòng khách sạn.',
                'tinh_trang' => 1,
                'hinh_anh' => 'https://cdn.huongnghiepaau.com/wp-content/uploads/2018/06/phong-standard.jpg',
                'khu_vuc_id' => 4,
                'so_khach' => 2,
            ],

            [
                'ma_phong' => 'Superior', 'gia_mac_dinh' => 3000000,
                'mo_ta_phong' => 'Phòng superior cao cấp hơn phòng standard với diện tích lớn hơn (từ 20m2 trở lên) bao gồm 1-2 giường, tầm nhìn view cũng đẹp hơn. Trang thiết bị của phòng được khách sạn đầu tư hiện đại. Vì chất lượng tốt hơn nên mức giá cho phòng superior cũng sẽ cao hơn phòng standard.',
                'tinh_trang' => 1,
                'hinh_anh' => 'https://nhatkyduhi.com/wp-content/uploads/2021/12/phong-superior-1.jpg',
                'khu_vuc_id' => 3,
                'so_khach' => 3,
            ],

            [
                'ma_phong' => 'Deluxe', 'gia_mac_dinh' => 4000000,
                'mo_ta_phong' => 'Phòng deluxe thường ở tầng trên cao với view đẹp (hướng ra núi, biển… ). Diện tích của loại phòng này rộng rãi hơn superior và được đầu tư trang thiết bị cao cấp như tivi, tủ lạnh, bồn rửa mặt cao cấp… Đương nhiên, mức giá niêm yết dành cho phòng deluxe sẽ cao hơn superior.',
                'tinh_trang' => 1,
                'hinh_anh' => 'https://vinapad.com/wp-content/uploads/2019/03/phong-deluxe-2.jpg',
                'khu_vuc_id' => 2,
                'so_khach' => 4,
            ],

            [
                'ma_phong' => 'Suite', 'gia_mac_dinh' => 5000000,
                'mo_ta_phong' => 'Phòng suite là loại phòng cao cấp nhất khách sạn, được đặt ở tầng cao nhất, nơi có không gian thoáng đãng và không khí trong lành. Với diện tích từ 60 – 120m2, phòng suite thường bao gồm 1 phòng khách, 1 phòng ngủ riêng biệt, cửa sổ và ban công để khách ngắm phong cảnh.
                                Trang thiết bị của phòng cũng được khách sạn đầu tư tối đa: điều hòa, ti vi, loa… cùng với bàn làm việc và quầy bar nhỏ. Phòng suite còn đi kèm với những dịch vụ đặc biệt: quản gia phục vụ 24/24, xe đưa đón tận nơi, được phục vụ những món ăn đặc biệt.',
                'tinh_trang' => 1,
                'hinh_anh' => 'https://www.hoteljob.vn/files/Anh-Hoteljob-Ni/Nam-2020/Thang-10/phong-suite-la-gi-01.jpg',
                'khu_vuc_id' => 1,
                'so_khach' => 4,
            ],

        ]);
    }
}
