<?php

namespace App\Http\Controllers;

use App\Models\Rfid;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    public function index()
    {
        return response()->json([
            "message"=>"success",
            "data"=>Rfid::get()
        ]);
    }
    public function store(Request $request)
    {
        $id_devices=$request->id_devices;
        $uid_rfid=$request->rfid;
        Rfid::create([
            'id_devices'=>$id_devices,
            'uid_rfid'=>$uid_rfid
        ]);
        return true;
    }
}
