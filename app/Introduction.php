<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    CONST SLUG = [
        'Giới thiệu chung' => 'gioi-thieu-chung',
        'Lịch sử hình thành và phát triển' => 'lich-su-hinh-thanh-va-phat-trien',
        'Chức năng nhiệm vụ' => 'chuc-nang-nhiem-vu',
        'Nguyên tắc hoạt động' => 'nguyen-tac-hoat-dong'
    ];

    CONST SLUG_MINI = [
        'gioi-thieu-chung',
        'lich-su-hinh-thanh-va-phat-trien',
        'chuc-nang-nhiem-vu',
        'nguyen-tac-hoat-dong',
    ];

}
