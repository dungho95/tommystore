<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    const CREATED_AT ='dh_ngayLap'; //create_at
    const UPDATED_AT ='dh_ngayGiao';//create_at
    protected $table        ='dondathang';
    protected $fillable     =['dh_ngayLap','dh_ngayGiao','dh_noiGiao','dh_trangThaiThanhToan','httt_ma','km_ma'];
    protected $guarded      =['dh_ma'];
    protected $primaryKey   ='dh_ma';
    protected $dates        =['dh_ngayLap','dh_ngayGiao']; //Carbon\Carbon
    protected $dateFormat   ='Y-m-d H:i:s';
    public function khachHangs()
    {
        return $this->belongsTo('App\khachhang','kh_ma','kh_ma');
    }
    public function chiTietDH()
    {
        return $this->hasMany('App\chitietdonhang', 'dh_ma', 'dh_ma');
    }
    public function hinhTTT()
    {
        return $this->belongsTo('App\hinhthucthanhtoan','httt_ma','httt_ma');
    }
}

