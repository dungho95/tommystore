<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dondathang;

class DondathangController extends Controller
{
    public function index()
    {
        $ds_dh= dondathang::all(); // SELECT * FROM cusc_loai

        return view('dondathang.index')
            ->with('ds_dh',$ds_dh);
    }

    
}
