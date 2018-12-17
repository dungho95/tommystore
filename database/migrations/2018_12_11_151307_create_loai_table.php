<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('lsp_ma')
                ->autoIncrement()
                ->comment('Mã loại sản phẩm');
            $table->string('lsp_ten',50);
            $table->string('lsp_moTa',150);
            $table->unique(['lsp_ma']);
            $table->unsignedTinyInteger('lsp_trangThai')->comment('1:đóng 2:khả dụng');  
            //$table->primary(['lsp_ma']);
            }
        );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
