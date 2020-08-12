<?php

namespace App\Http\Controllers\Util;

use App\Exceptions\UploadExceptions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');

        $this->dataSize($file);
        $this->dataType($file);
        if ($file) {

            $path=$file->store('upload','upload');

            return [
                "code"=> 0,
                "msg"=>'图片上传成功',
                "data"=>[
                    "src"=>'/'.$path
                ],
            ];
        }
    }

    protected function dataSize($file){
        if($file->getSize() > 99999999){
            throw new UploadExceptions('上传文件过大');
        }
    }


    protected function dataType($file){
        if(!in_array(strtolower($file->getClientOriginalExtension()),['jpg','png','jpeg'])){

            throw new UploadExceptions('类型不允许');
        }
    }
}
