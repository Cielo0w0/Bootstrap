<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public static function imageUpload($file){
        // 如果上傳檔案的資料夾不存在
        if (!is_dir('upload/')) {
            // 那就創一個可以上傳的資料夾
            mkdir('upload/');
        }

        if (!is_dir('upload/')) {
            mkdir('upload/');
        }

        $extenstion =$file->getClientOriginalExtension();

        $filename = md5(uniqid(rand())).'.'. $extenstion;
        $path='/upload/'.$filename;
        move_uploaded_file($file , public_path().$path);

        return $path;
    }

}
