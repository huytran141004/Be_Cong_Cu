<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use Illuminate\Http\Request;

class VeController extends Controller
{
    public function getData(){
        $data = Ve::get();
        return response()->json([
            "data" => $data
        ]);
    }
    public function chiTiet($id){
        $data = Ve::where("id", $id)->first();
        return response()->json([
            "data"  => $data
        ]);
    }
    public function doiLoaiVe(Request $request){
        $check = Ve::where("id", $request->id)->first();
        if($check->loai_ve == 1){
            $check->loai_ve = 0;
        } else{
            $check->loai_ve = 1;
        }
        $check->save();
        return response()->json([
            "message"   => "Đổi loại vé thành công."
        ]);
    }
}
