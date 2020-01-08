<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaiseFundPost extends Model
{
    protected $table = "raise_fund_posts";

    public function member()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
