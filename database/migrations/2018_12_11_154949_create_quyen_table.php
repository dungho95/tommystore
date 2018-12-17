<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('q_ma')
                ->autoIncrement()
                ->comment('Mã quyen');
            $table->string('q_ten',50);
            $table->string('q_noiDung',150);
            $table->unsignedTinyInteger('q_trangThai')->comment('1:đóng 2:khả dụng');
            $table->unique(['q_ma']);
            
            //$table->primary(['q_ma']);
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
        Schema::drop('quyen');
    }
}
