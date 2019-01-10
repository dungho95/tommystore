<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhthucthanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhthucthanhtoan', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('httt_ma')
                ->autoIncrement()
                ->comment('Mã hình thức thanh toán');
            $table->string('httt_ten',50);
            $table->unsignedTinyInteger('httt_trangThai')->comment('1:đóng 2:khả dụng');
            $table->unique(['httt_ma']);
            //$table->primary(['httt_ma']);
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
        Schema::drop('hinhthucthanhtoan');
    }
}
