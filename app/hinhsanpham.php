<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hinhsanpham extends Model
{
    public    $timestamps   = false; //created_at, updated_at

    
    protected $table        = 'hinhsanpham';
    protected $fillable     = ['hsp_ten'];
    protected $guarded      = ['sp_ma', 'hsp_ma'];

    protected $primaryKey   = ['sp_ma', 'hsp_ma'];
    public    $incrementing = false;
}
