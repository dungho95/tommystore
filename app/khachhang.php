<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    public    $timestamps   = false;
    protected $table        ='khachhang';
    protected $fillable     =['kh_taiKhoan','kh_matKhau','kh_hoTen','kh_gioiTinh','kh_email','kh_ngaySinh','kh_diaChi','kh_dienThoai','kh_makichhoat','kh_trangThai'];
    protected $guarded      =['kh_ma'];
    protected $primaryKey   ='kh_ma';
    protected $dates        =['kh_ngaySinh']; //Carbon\Carbon
    protected $dateFormat   ='Y-m-d H:i:s';
    public function donDH()
    {
        return $this->belongsTo('App\dondathang','dh_ma','dh_ma');
    }
}
