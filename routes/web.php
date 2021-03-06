<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

Route::resource('admin/checklogin', 'MainController');
Route::resource('admin/danhsachloai','LoaiController');
Route::resource('admin/danhsachquyen','QuyenController');
Route::resource('admin/danhsachnhasanxuat','NhasanxuatController');
Route::resource('admin/danhsachnhanvien','NhanvienController');
Route::resource('admin/hinhthucthanhtoan','HinhthucthanhtoanController');
Route::resource('admin/danhsachsanpham','SanphamController');
Route::resource('admin/danhsachkhachhang','KhachhangController');
Route::resource('admin/danhsachdondathang','DondathangController');