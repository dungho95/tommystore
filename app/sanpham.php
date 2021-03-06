<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    const     CREATED_AT    = 'sp_taoMoi';
    const     UPDATED_AT    = 'sp_capNhat';
    protected $table        = 'sanpham';
    protected $fillable     = ['sp_ten', 'sp_giaGoc', 'sp_giaBan', 'sp_hinh', 'sp_thongTin', 'sp_danhGia', 'sp_taoMoi', 'sp_capNhat', 'sp_trangThai', 'lsp_ma'];
    protected $guarded      = ['sp_ma'];
    protected $primaryKey   = 'sp_ma';
    protected $dates        = ['sp_taoMoi', 'sp_capNhat'];
    protected $dateFormat   = 'Y-m-d H:i:s';
    public function loaiSp()
    {
        return $this->belongsTo('App\Loai', 'lsp_ma', 'lsp_ma');
    }
    public function nhaSxs()
    {
        return $this->belongsTo('App\Loai', 'nsx_ma', 'nsx_ma');
    }
    public function hinhanhlienquan()
    {
        return $this->hasMany('App\hinhsanpham', 'sp_ma', 'sp_ma');
    }
   
}
