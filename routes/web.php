<?php

use Illuminate\Support\Facades\Route;

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

//Auth::routes();
Auth::routes([
    'register' => false,
    
]);
Route::match(['post','get'],'/register','KaryawanController@register')->name('register');
Route::match(['post','get'],'/pengajuan_cuti','KaryawanController@pengajuan_cuti')->name('karyawan.pengajuan_cuti');
Route::get('/form_pengajuan_cuti','KaryawanController@form_pengajuan_cuti')->name('form_pengajuan_cuti');
Route::match(['post','get'],'/update_pengajuan_cuti/{id}','KaryawanController@update_pengajuan_cuti')->name('karyawan.update_pengajuan_cuti');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admins')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/','AdminController@index')->name('admins');
    Route::get('/data_karyawan','AdminController@data_karyawan')->name('admins.data_karyawan');
    Route::match(['post','get'],'/add_data_karyawan','AdminController@add_data_karyawan')->name('admins.add_data_karyawan');
    Route::get('/view_data_karyawan/{id}','AdminController@view_data_karyawan')->name('admins.view_data_karyawan');
    Route::match(['post','get'],'/update_data_karyawan/{id}','AdminController@update_data_karyawan')->name('admins.update_data_karyawan');
    Route::delete('/delete_data_karyawan/{id}','AdminController@delete_data_karyawan')->name('admins.delete_data_karyawan');

    Route::get('/data_karyawan_cuti','AdminController@data_karyawan_cuti')->name('admins.data_karyawan_cuti');

    Route::get('/data_tiga_karyawan_pertama','AdminController@data_tiga_karyawan_pertama')->name('admins.data_tiga_karyawan_pertama');
    Route::get('/data_karyawan_pernah_cuti','AdminController@data_karyawan_pernah_cuti')->name('admins.data_karyawan_pernah_cuti');
    Route::get('/data_karyawan_pernah_cuti_lebih','AdminController@data_karyawan_pernah_cuti_lebih')->name('admins.data_karyawan_pernah_cuti_lebih');
    Route::get('/sisa_cuti','AdminController@sisa_cuti')->name('admins.sisa_cuti');


});

