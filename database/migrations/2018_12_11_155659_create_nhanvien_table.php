<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatNhanvienTable extends Migration
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
                $table->unsignedBigInteger('nv_ma')
                    ->autoIncrement()
                    ->comment('Mã khách hàng');
                $table->string('nv_ten',100)
                    ;
                $table->string('nv_matKhau',32)
                ;
                
                $table->unsignedTinyInteger('nv_gioiTinh')
                    ->default('1');
                $table->string('nv_email',100)
                ;
                $table->dateTime('nv_ngaySinh')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                $table->string('nv_diaChi',250)
                    ->default('NULL')
                    ;
                $table->string('nv_dienThoai',11)
                    ->default('NULL')
                    ;
                $table->dateTime('kh_ngayDangKy')
                    ->default(DB::raw('CURRENT_TIMESTAMP'))
                    ;
                
                $table->unsignedTinyInteger('nv_trangThai')
                    ->default('3');
                $table->unsignedTinyInteger('q_ma');
                $table->unique(['nv_ma']);
                $table->unique(['nv_email']);
                $table->unique(['nv_dienThoai']);
                $table->primary(['nv_ma']);
                $table->foreign('q_ma')->references('q_ma')->on('quyen')->onDelete('CASCADE')->onUpdate('CASCADE');

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
