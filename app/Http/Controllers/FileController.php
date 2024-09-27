<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FileController extends Controller
{
    //
    function upload(request $request){
        $file=$request->File('file')->store('storefile');
        return ["upload successfully"=>$file];
    }
}
