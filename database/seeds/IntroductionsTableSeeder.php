<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedArray = [
            [
                'title' => 'Giới thiệu chung',
                'slug' => 'gioi-thieu-chung',
                'content' => 'Đây là trang giới thiệu chung',
            ],
            [
                'title' => 'Lịch sử hình thành và phát triển',
                'slug' => 'lich-su-hinh-thanh-va-phat-trien',
                'content' => 'Lịch sử hình thành và phát triển',
            ],
            [
                'title' => 'Chức năng nhiệm vụ',
                'slug' => 'chuc-nang-nhiem-vu',
                'content' => 'Chức năng nhiệm vụ',
            ],
            [
                'title' => 'Nguyên tắc hoạt động',
                'slug' => 'nguyen-tac-hoat-dong',
                'content' => 'Nguyên tắc hoạt động',
            ],
        ];
        foreach ($seedArray as $seed) {
            DB::table('introductions')->insert($seed);
        }
    }
}
