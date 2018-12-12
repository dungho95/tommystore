<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('dh_ma')
                    ->autoIncrement()
                    ->comment('Mã đơn hàng');
                
                $table->timestamp('dh_ngayLap')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('dh_ngayGiao')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->string('dh_noiGiao',200);
                $table->unsignedTinyInteger('dh_trangThaiThanhToan')
                    ->default('0');
                $table->unsignedTinyInteger('httt_ma');
                $table->unsignedBigInteger('kh_ma');
                $table->unique(['dh_ma']);
                //$table->primary(['dh_ma']);
                
                $table->foreign('httt_ma')->references('httt_ma')->on('hinhthucthanhtoan')->onDelete('CASCADE')->onUpdate('CASCADE');
                $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dondathang');
    }
}
