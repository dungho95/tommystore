<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhluanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('bl_ma')
                ->autoIncrement();
            $table->unsignedTinyInteger('sp_ma');
            $table->text('bl_noiDung');
            $table->unsignedBigInteger('kh_ma');
            $table->unique(['bl_ma']);
            //$table->primary(['bl_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('binhluan');
    }
}
