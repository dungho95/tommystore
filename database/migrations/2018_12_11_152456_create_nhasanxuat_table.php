<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhasanxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhasanxuat', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
            $table->unsignedTinyInteger('nsx_ma')
                ->autoIncrement()
                ->comment('Ma nha san xuat');
            $table->string('nsx_ten',50);
            $table->unique(['nsx_ma']);
            //$table->primary(['nsx_ma']);
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
        Schema::dropIfExists('nhasanxuat');
    }
}
