<?php
namespace App\Traits;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageUpload{




    function imageupload($image){
    
       $imagename=Str::random(20);;
       $ext=$image->getClientOriginalExtension();
       $imagefullname=$imagename.'.'.$ext;
       $uploadpath='productimages/';
       $imageurl=$uploadpath.$imagefullname;
       $upload=$image->move($uploadpath,$imagefullname);
       return $imageurl;
    }

}