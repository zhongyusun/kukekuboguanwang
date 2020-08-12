<?php

namespace App\Exceptions;

use Exception;

class UploadExceptions extends Exception
{
    public function render(){
        return response()->json(['msg' =>$this->getMessage(), 'code' => 403],200);
    }
}
