<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function devicedata($id=null){
        return $id?Device::find($id):Device::all();
    }
    function adddata(Request $request){
        $device=new Device;
        $device->name=$request->name;
       $success= $device->save();
       if($success)
       {
        return ["Result"=>"Data has been saved"];

       }
        return ["Result"=>"Data has not been saved"];
    }
}
