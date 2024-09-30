<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->integer("id_ve");
            $table->integer("id_khach_hang");
            $table->integer("loai_ve")->comment("0:ngày, 1:tháng");
            $table->string("hinh_anh");
            $table->integer("doi_tuong")->comment("0:trẻ em, 1:người lớn, 2:sinh viên");
            $table->double("gia_ban");
            $table->double("gia_khuyen_mai");
            $table->integer("is_thanh_toan")->comment("0:chưa thanh toán, 1:đã thanh toán");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
