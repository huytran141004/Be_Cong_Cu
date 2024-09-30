<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $table = "ves";
    protected $fillable = [
        "loai_ve",
        "hinh_anh",
        "doi_tuong",
        "gia_ban",
        "gia_khuyen_mai",
    ];
}
