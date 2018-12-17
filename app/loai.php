<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai extends Model
{
    protected $table        ='loai';
    protected $fillable     =['lsp_ten','lsp_moTa','lsp_trangThai'];
    protected $guarded      =['lsp_ma'];
    protected $primaryKey   ='lsp_ma';

    public function sanPhams()
    {
        return $this->hasMany('App\SanPham','lsp_ma','lsp_ma');
    }
}
