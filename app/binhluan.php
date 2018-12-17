<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    const CREATED_AT ='cd_taoMoi'; //create_at
    const UPDATED_AT ='cd_capNhat';//create_at

    protected $table        ='chude';
    protected $fillable     =['cd_ten','cd_taoMoi','cd_capNhat','cd_trangThai'];
    protected $guarded      =['cd_ma'];

    protected $primaryKey   ='cd_ma';

    protected $dates        =['cd_taoMoi','cd_capNhat']; //Carbon\Carbon
    protected $dateFormat   ='Y-m-d H:i:s';
}
