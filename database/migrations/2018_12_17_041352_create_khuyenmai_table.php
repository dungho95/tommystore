<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('km_ma')
                ->autoIncrement()
                ->comment('Mã khuyến mãi');
            $table->unique(['km_ma']);
            $table->string('km_ten', 191)->comment('Tên chương trình # Tên chương trình khuyến mãi');
            $table->unsignedTinyInteger('lkm_ma');          
            $table->string('km_giaTri', 50)->default('100;100')->comment('Giá trị khuyến mãi # Giá trị khuyến mãi trên tổng hóa đơn (giảm tiền/giảm % tiền, giảm % vận chuyển), định dạng: tien;VanChuyen');            
            $table->text('km_noiDung')->comment('Thông tin chi tiết # Nội dung chi tiết chương trình khuyến mãi');
            $table->dateTime('km_batDau')->comment('Thời điểm bắt đầu # Thời điểm bắt đầu khuyến mãi');
            $table->dateTime('km_ketThuc')->nullable()->default(NULL)->comment('Thời điểm kết thúc # Thời điểm kết thúc khuyến mãi');
            $table->dateTime('km_ngayLap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm lập # Thời điểm lập kế hoạch khuyến mãi');
            $table->unsignedBigInteger('nv_ma');
            $table->unsignedTinyInteger('km_trangThai')->default('2')->comment('Trạng thái # Trạng thái chương trình khuyến mãi: 1-ngưng khuyến mãi, 2-lập kế hoạch, 3-ký nháy, 4-duyệt kế hoạch');           
            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('lkm_ma')->references('lkm_ma')->on('loaikhuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
