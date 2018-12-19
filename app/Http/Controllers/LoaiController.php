<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loai;
use Session;
use App\Http\Requests\LoaiRequest;

class LoaiController extends Controller
{
    public function index()
    {
        $ds_loai= Loai::all(); // SELECT * FROM cusc_loai

        return view('loai.index')
            ->with('danhsachloai',$ds_loai);
    }
}
