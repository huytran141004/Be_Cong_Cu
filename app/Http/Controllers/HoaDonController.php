<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\Ve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function thanhToan(Request $request){
        $khachhang = Auth::guard('sanctum')->user();
        $ve = Ve::find($request->id_ve)->first();
        if($ve){
           HoaDon::create([
            "id_ve"         =>$ve->id,
            "id_khach_hang" =>$khachhang->id,
            "loai_ve"       =>$ve->loai_ve,
            "hinh_anh"      =>$ve->hinh_anh,
            "doi_tuong"     =>$ve->doi_tuong,
            "gia_ban"       =>$ve->gia_ban,
            "gia_khuyen_mai"=>$ve->gia_khuyen_mai,
            "so_luong"      =>$request->so_luong,
            "is_thanh_toan" =>1,
           ]);
           return response()->json([
            "status"    => true,
            "message"   => "Thanh toán thành công"
            ]);
        }else{
            return response()->json([
                "status"    => false,
                "message"   => "Thanh toán thất bại"
            ]);
        }
    }
}
