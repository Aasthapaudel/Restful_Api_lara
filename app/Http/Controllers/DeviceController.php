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
    function updatedata(Request $request,$id){
        $device = Device::findOrFail($id);
        $device->name=$request->name;
        $success=$device->save();
        if($success)
        {
            return ["Result"=>"Update successfully"];
        }
        return ["Result"=>"Update Error"];


    }
    function searchdata($name){
        // return Device::where('name',$name)->get();//get name by saerching whole name
        return Device::where('name',"like","%".$name. "%")->get();
    }
    function deletedata($id){
        $device =Device::find($id);
$result=$device->delete();
        if($result){

            return ["result"=>"delete successfully"];
        }
        return ["result"=>"delete error"];

    }
}
