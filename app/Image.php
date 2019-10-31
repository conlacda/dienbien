<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    CONST DEFAULT_ALBUM_IMAGE = '/images/album-default.jpg';
    public function gallery()
    {
        return $this->belongsTo(Gallery::class,'gallery_id','id');
    }
}
