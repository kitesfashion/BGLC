<?php

namespace App;

use Intervention\Image\ImageManagerStatic as Image;
use  File;
use  DB;

class HelperClass
{

    /*This is last modified function for upload any image*/
    public static function UploadImage($file,$table=null,$directory=null,$width=null,$height=null)
    {   
        $lastData = \DB::table($table)->find(\DB::table($table)->max('id'));
        if(@$lastData){
            $maxId = $lastData->id+1+rand(100000000,99999999999);
        }else{
           $maxId = '1'.+rand(100000000,99999999999); 
        }
        
        $data = getimagesize($file);
        $filename = $file->getClientOriginalName(); 
        $name = pathinfo($filename, PATHINFO_FILENAME);
        $logoExtension = $file->getClientOriginalExtension();
       if (!File::exists($directory)) {
            File::makeDirectory($directory, 0775, true, true);
        }
        $logoUrl = $directory.($name.'_'.$maxId.'.'.$logoExtension);
        if(@$width == null && @$height == null){
            move_uploaded_file($file, "$directory$name".'_'.$maxId.'.'."$logoExtension");
        }
        if(@$width != null && @$height != null){
            Image::make($file)->resize($width, $height)->save($logoUrl);
        }
        return $logoUrl;
    }
}
