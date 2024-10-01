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
        $ve = Ve::where("id", $request->id_ve)->first();
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
    public function chitietHoaDon(Request $request){
        $ve = HoaDon::join('khach_hangs', 'hoa_dons.id_khach_hang', 'khach_hangs.id')
                    ->where("id_ve", $request->id)
                    ->select('hoa_dons.*','khach_hangs.username')
                    ->first();
        if($ve){
            return response()->json([
                "status"        => true,
                "data"          => $ve,
            ]);
        }
        else{
            return response()->json([
                "status"    => false,
                "message"   => "Không có hóa đơn này"
            ]);
        }
    }
}
