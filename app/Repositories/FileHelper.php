<?php


namespace App\Repositories;


class FileHelper
{
    public static function store($file,$path)
    {
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;
        $uploadPath = public_path($path);
        $file->move($uploadPath, $fileName);
        return $path . $fileName;
//        '/uploads'
    }
}
