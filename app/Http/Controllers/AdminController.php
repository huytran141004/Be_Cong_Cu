<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function themVe(Request $request){
        Ve::create([
            "loai_ve"           => $request->loai_ve,
            "hinh_anh"          => $request->hinh_anh,
            "doi_tuong"         => $request->doi_tuong,
            "gia_ban"           => $request->gia_ban,
            "gia_khuyen_mai"    => $request->gia_khuyen_mai,
        ]);
        return response()->json([
            "message"   => "Thêm mới thành công."
        ]);
    }
    public function xoaVe(Request $request){
        $check = Ve::find($request->id)->delete();
        if($check){
            return response()->json([
                "status"    => true,
                "message"  =>"Xóa thành công"
            ]);
        } else {
            return response()->json([
                "status"    => false,
                "message"  =>"Xóa thất bại"
            ]);
        }
    }
    public function updateVe(Request $request){
        $check = Ve::find($request->id)->update([
            "loai_ve"       =>$request->loai_ve,
            "doi_tuong"     =>$request->doi_tuong,
            "gia_ban"       =>$request->gia_ban,
            "gia_khuyen_mai"=>$request->gia_khuyen_mai,
        ]);
        return response()->json([
            "status"    => true,
            "message"   =>"Update thành công."
        ]);
    }
}
