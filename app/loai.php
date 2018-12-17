<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    protected $table        ='loai';
    protected $fillable     =['l_ten','l_moTa','l_trangThai'];
    protected $guarded      =['l_ma'];
    protected $primaryKey   ='l_ma';

    public function sanPhams()
    {
        return $this->hasMany('App\SanPham','l_ma','l_ma');
    }
}
