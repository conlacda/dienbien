<?php


namespace App\Repositories;


class ImageHelper
{
    public static function store($image)
    {
        $fileExtension = $image->getClientOriginalExtension();
        $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;
        $uploadPath = public_path('/uploads');
        $image->move($uploadPath, $fileName);
        return '/uploads/' . $fileName;
    }
}
