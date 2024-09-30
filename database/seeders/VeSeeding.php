<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ves')->delete();
        DB::table('ves')->truncate();
        DB::table('ves')->insert([
            ["loai_ve" => 0, "hinh_anh" => "https://saigonpoolspa.com/wp-content/uploads/2022/10/thiet-ke-tong-quan-ho-boi-thanh-tam.jpg", "doi_tuong" => 0, "gia_ban" => 100000, "gia_khuyen_mai" => 70000],
            ["loai_ve" => 0,"hinh_anh" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVInZ5h85kOinsZ_6L8DBDg6u0igj3OIdFsQ&s", "doi_tuong" => 1, "gia_ban" => 100000, "gia_khuyen_mai" => 70000],
            ["loai_ve" => 0 ,"hinh_anh" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1YRKIJ2plOxhLU1SzUkTIerQYizR4HmF0hg&s", "doi_tuong" => 2, "gia_ban" => 100000, "gia_khuyen_mai" => 70000],
            ["loai_ve" => 1 ,"hinh_anh" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1YRKIJ2plOxhLU1SzUkTIerQYizR4HmF0hg&s", "doi_tuong" => 0, "gia_ban" => 70000, "gia_khuyen_mai" => 50000],
            ["loai_ve" => 1 ,"hinh_anh" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1YRKIJ2plOxhLU1SzUkTIerQYizR4HmF0hg&s", "doi_tuong" => 1, "gia_ban" => 40000, "gia_khuyen_mai" => 50000],
            ["loai_ve" => 1 ,"hinh_anh" =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1YRKIJ2plOxhLU1SzUkTIerQYizR4HmF0hg&s", "doi_tuong" => 2, "gia_ban" => 65000, "gia_khuyen_mai" => 50000],
        ]);
    }
}
