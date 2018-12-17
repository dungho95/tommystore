<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaikhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaikhuyenmai', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('lkm_ma')
                ->autoIncrement()
                ->comment('Mã loại khuyến mãi');
            $table->string('lkm_ten',150)
                  ->comment('Tên khuyến mãi');
            $table->string('lkm_moTa',150);
            $table->unique(['lkm_ma']);
            $table->unsignedTinyInteger('lkm_trangThai')->comment('1:đóng 2:khả dụng'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaikhuyenmai');
    }
}
