<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedTinyInteger('ctdh_ma')
                    ->autoIncrement()
                    ->comment('Mã chi tiet đơn hàng');
                $table->unsignedTinyInteger('sp_ma');
                $table->unsignedTinyInteger('dh_ma');
                
                $table->unique(['ctdh_ma']);
                //$table->primary(['ctdh_ma']);
                
                $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
                $table->foreign('dh_ma')->references('dh_ma')->on('dondathang')->onDelete('CASCADE')->onUpdate('CASCADE');
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
