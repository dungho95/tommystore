<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhthucthanhtoan extends Model
{
    public    $timestamps   = false;
    protected $table        ='hinhthucthanhtoan';
    protected $fillable     =['httt_ten','httt_trangThai'];
    protected $guarded      =['httt_ma'];
    protected $primaryKey   ='httt_ma';
}
