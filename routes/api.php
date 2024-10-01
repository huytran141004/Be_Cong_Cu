<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\VeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/khach-hang/dang-ky", [KhachHangController::class, "dangKy"]);
Route::post("/khach-hang/dang-nhap", [KhachHangController::class, "dangNhap"]);
Route::get("/ve/get-data", [VeController::class, "getData"]);
Route::get("/chi-tiet/{id}", [VeController::class, "chiTiet"]);
Route::post("/admin/doi-loai-ve", [VeController::class, "doiLoaiVe"]);
Route::post("/admin/them-ve", [AdminController::class, "themVe"]);
Route::post("/admin/xoa-ve", [AdminController::class, "xoaVe"]);
Route::post("/admin/update-ve", [AdminController::class, "updateVe"]);
Route::post("/khach-hang/thanh-toan", [HoaDonController::class, "thanhToan"]);
Route::post("/khach-hang/chi-tiet-hoa-don", [HoaDonController::class, "chiTietHoaDon"]);
