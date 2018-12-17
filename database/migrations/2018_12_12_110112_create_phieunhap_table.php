<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('pn_ma')
                ->autoIncrement()
                ->comment('Ma phieu nhap');
            $table->timestamp('pn_ngayNhap')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('nv_ma');
            
            $table->unique(['pn_ma']);
            //$table->primary(['pn_ma']);
            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedTinyInteger('pn_trangThai')->comment('1:đóng 2:khả dụng');
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
        Schema::dropIfExists('phieunhap');
    }
}
