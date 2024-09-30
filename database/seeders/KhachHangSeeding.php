<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Psy\CodeCleaner\PassableByReferencePass;

class KhachHangSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'username'      => "tranhuy",
                'email'         => "hoboi@gmail.com",
                'password'      => bcrypt("123456"),
            ],
        ]);
    }
}
