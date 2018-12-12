<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietphieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietphieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('ctpn_ma')
                ->autoIncrement()
                ->comment('Ma chi tiet phieu nhap');
            $table->unsignedTinyInteger('pn_ma');
            $table->unsignedTinyInteger('sp_ma');
            $table->unsignedBigInteger('ctpn_soLuong');
            $table->unsignedBigInteger('ctpn_donGia');
            $table->unique(['ctpn_ma']);
            //$table->primary(['ctpn_ma']);
            $table->foreign('pn_ma')->references('pn_ma')->on('phieunhap')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('chitietphieunhap');
    }
}
