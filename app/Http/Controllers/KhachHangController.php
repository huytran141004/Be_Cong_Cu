<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use App\Models\Ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhachHangController extends Controller
{
    public function dangKy(Request $request){
        $khach_hang = KhachHang::where("email", $request->email)->first();
        if($khach_hang){
            return response()->json([
                "status"    => false,
                "message"   => "Tài khoản đã tồn tại."
            ]);
        } else{
            KhachHang::create([
                'username'      => $request->username,
                'email'         => $request->email,
                'password'      => bcrypt($request->password)
            ]);
            return response()->json([
                "status"    => true,
                "message"   => "Đăng ký thành công."
            ]);
        }
    }
    public function dangNhap(Request $request){
        $khach_hang = Auth::guard('khachhang')->attempt([
            "email"     => $request->email,
            "password"  => $request->password
        ]);
        if($khach_hang){
            $khachhang = Auth::guard('khachhang')->user();
            return response()->json([
                "status"    => true,
                "message"   => "Bạn đã đăng nhập thành công.",
                "token"     => $khachhang->createToken("token_khach_hang")->plainTextToken,
            ]);
        } else {
            return response()->json([
                "status"    => false,
                "message"   => "Tài khoản hoặc mật khẩu không đúng!"
            ]);
        }
    }

}
