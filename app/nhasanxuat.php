<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhasanxuat extends Model
{
    public    $timestamps   = false;
    protected $table        ='nhasanxuat';
    protected $fillable     =['nsx_ten','nsx_trangThai'];
    protected $guarded      =['nsx_ma'];
    protected $primaryKey   ='nsx_ma';

    public function sanPhams()
    {
        return $this->hasMany('App\sanpham','nsx_ma','nsx_ma');
}
}
