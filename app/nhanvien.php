<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    const CREATED_AT ='nv_taoMoi'; //create_at
    const UPDATED_AT ='nv_capNhat';//create_at
    protected $table        ='nhanvien';
    protected $fillable     =['nv_ten','nv_matKhau','nv_gioiTinh','nv_email','nv_ngaySinh','nv_diaChi','nv_dienThoai','nv_taoMoi', 'nv_capNhat','nv_trangThai','q_ma'];
    protected $guarded      =['nv_ma'];
    protected $primaryKey   ='nv_ma';
    protected $dates        =['nv_taoMoi','nv_capNhat']; //Carbon\Carbon
    protected $dateFormat   ='Y-m-d H:i:s';
    public function quyenNv()
    {
        return $this->belongsTo('App\Quyen','q_ma','q_ma');
    }
}
