<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('sp_ma')
                    ->autoIncrement()
                    ->comment('Mã sản phẩm');
                $table->string('sp_ten',200)
                    ->comment('Tên  sản phầm');
                $table->integer('sp_giaCu')
                    ->default('0')
                    ->comment('Giá sản phẩm');
                $table->integer('sp_giaMoi')
                    ->default('0')
                    ->comment('Giá bán sản phẩm');
                $table->string('sp_hinh',200)
                    ->comment('Hình sản phẩm');
                $table->text('sp_thongTin')
                    ->comment('Thông tin sản phẩm');    
                $table->string('sp_danhGia',50)
                    ->comment('Đánh giá sản phẩm');
                $table->timestamp('sp_taoMoi')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Sản phẩm tạo mới');
                $table->timestamp('sp_capNhat')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ->comment('Sản phẩm cập nhật');
                
                $table->primary(['sp_ma']);
                
                $table->unsignedTinyInteger('lsp_ma');
                $table->foreign(['lsp_ma'])
                    ->references('lsp_ma')
                    ->on('loai');

                $table->unsignedTinyInteger('nsx_ma');
                $table->foreign(['nsx_ma'])
                        ->references('nsx_ma')
                        ->on('nhasanxuat');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
