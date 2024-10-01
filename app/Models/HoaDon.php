<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = 'hoa_dons';
    protected $fillable = [
        "id_ve",
        "id_khach_hang",
        "loai_ve",
        "hinh_anh",
        "doi_tuong",
        "gia_ban",
        "gia_khuyen_mai",
        "so_luong",
        "is_thanh_toan",
    ];
}
