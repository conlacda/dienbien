<?php


namespace App\Helpers;


class VideoHelper
{
    public static function iframeHTML($string)
    {
        $arr = explode(" ",$string);
        $iframeCode = "";
        for ($i=0;$i<count($arr);$i++){
            if (substr($arr[$i],0,5) == "width" ){
//                $iframeCode .= " width='320' ";
                $iframeCode .= " width='100%' ";

            } else
            if (substr($arr[$i],0,6) == "height" ){
                $iframeCode .= " height='240' ";
            } else
                $iframeCode .= ' ' . $arr[$i] . ' ';
        }
        return $iframeCode;
    }
}
