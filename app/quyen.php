<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quyen extends Model
{
    public    $timestamps   = false;
    protected $table        ='quyen';
    protected $fillable     =['q_ten','q_noiDung','q_trangThai'];
    protected $guarded      =['q_ma'];
    protected $primaryKey   ='q_ma';

    public function nhanViens()
    {
        return $this->hasMany('App\nhanvien','q_ma','q_ma');
}
}
