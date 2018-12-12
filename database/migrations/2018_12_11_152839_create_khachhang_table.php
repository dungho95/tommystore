<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';//Ho tro relationship
                $table->unsignedBigInteger('kh_ma')
                    ->autoIncrement()
                    ->comment('Mã khách hàng');
                $table->string('kh_taiKhoan',50);
                $table->string('kh_matKhau',32)
                ;
                $table->string('kh_hoTen',100)
                ;
                $table->unsignedTinyInteger('kh_gioiTinh')
                    ->default('1');
                $table->string('kh_email',100)
                ;
                $table->dateTime('kh_ngaySinh')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                $table->string('kh_diaChi',250)
                    ->default('NULL')
                    ;
                $table->string('kh_dienThoai',11)
                    ->default('NULL')
                    ;
                $table->string('kh_makichhoat',11)
                    ->default('NULL')
                    ;
                $table->unsignedTinyInteger('kh_trangThai')
                    ->default('3');
                $table->unique(['kh_ma']);
                $table->unique(['kh_taiKhoan']);
                $table->unique(['kh_email']);
                $table->unique(['kh_dienThoai']);
                //$table->primary(['kh_ma']);
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
        //
    }
}
