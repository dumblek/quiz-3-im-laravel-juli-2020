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
    return asset('image/ERD_proyek.png');
});


Route::get('/proyek', 'ProyekController@index');// menampilkan semua
Route::get('/proyek/create', 'ProyekController@create'); // menampilkan halaman form
Route::post('/proyek', 'ProyekController@store'); //menyimpan proyek baru
Route::get('/proyek/{id}', 'ProyekController@show');
Route::get('/proyek/{id}/daftarkan-staff', 'ProyekController@create2'); // menampilkan detail item dengan id 
Route::post('/proyek/{id}/daftarkan-staff', 'ProyekController@store2');
Route::get('/proyek/{id}/edit', 'ProyekController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'ProyekController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ProyekController@destroy'); // menghapus data dengan id