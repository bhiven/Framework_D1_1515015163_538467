<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

/*Route::get('/', function () {
   return view('welcome');
});

Route::get('hello-world', function () {
    return 'Hello Worlds';
});


Route::get('berita/{berita?}', function ($pengguna = "Laravel 5") {
    return "berita $berita belum di baca";
});*/

Route::group(['middleware'=>'AuthentifikasiUser'], function()
{
	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/tambah','PenggunaController@tambah');
	Route::get('pengguna/{pengguna}','PenggunaController@lihat');
	Route::post('pengguna/simpan','PenggunaController@simpan');
	Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
	Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
	Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

	Route::get('ruangan','RuanganController@awal');
	Route::get('ruangan/tambah','RuanganController@tambah');
	Route::get('ruangan/{ruangan}','RuanganController@lihat');
	Route::post('ruangan/simpan','RuanganController@simpan');
	Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
	Route::post('ruangan/edit/{ruangan}','RuanganController@update');
	Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

	Route::get('matakuliah','MatakuliahController@awal');
	Route::get('matakuliah/tambah','MatakuliahController@tambah');
	Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
	Route::post('matakuliah/simpan','MatakuliahController@simpan');
	Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
	Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
	Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

	Route::get('mahasiswa','MahasiswaController@awal');
	Route::get('mahasiswa/tambah','MahasiswaController@tambah');
	Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
	Route::post('mahasiswa/simpan','MahasiswaController@simpan');
	Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
	Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
	Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

	Route::get('dosen','DosenController@awal');
	Route::get('dosen/tambah','DosenController@tambah');
	Route::get('dosen/{dosen}','DosenController@lihat');
	Route::post('dosen/simpan','DosenController@simpan');
	Route::get('dosen/edit/{dosen}','DosenController@edit');
	Route::post('dosen/edit/{dosen}','DosenController@update');
	Route::get('dosen/hapus/{mahasiswa}','DosenController@hapus');

	Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
	Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');
	Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahController@lihat');
	Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');
	Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@edit');
	Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');
	Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');

	Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
	Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');
	Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahController@lihat');
	Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahController@simpan');
	Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@edit');
	Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@update');
	Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahController@hapus');
});

//Route::get('ujiHas','RelationshipRebornController@ujiHas');

/*Route::get('/tes1', function (Illuminate\Http\Request $request)
	{
			echo "ini adalah request dari method get ". $request->nama;
	});*/

/* use Illuminate\Http\Request;

Route::get('/tes2', function()
	{
		echo Form::open(['url'=>'/']).
			 Form::label('nama').
			 Form::text('nama',null).
			 Form::submit('kirim').
			 Form::close();	 		 
	});

Route::post('/', function (Request $request)
	{
		echo "hasil dari  form input tadi nama : ".$request->nama;

	});
*/

