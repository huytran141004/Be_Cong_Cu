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
        return response()->json([
            "khach_hang"    => $khachhang->id
        ]);
    }
}
