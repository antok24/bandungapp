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
    return view('homefront');
});
	Route::get('simple-qr-code', function () {
		return QrCode::size(200)->generate('W3Adda Laravel Tutorial');
	});

	Route::resource('sertifikat', 'FrontController');
	Route::get('/searchnimpkbjj', 'FrontController@indexpkbjj');
	Route::post('/searchnimpkbjj', 'FrontController@indexsearchx');
	Route::get('/searchnimpkbjj/print/{nim}', 'FrontController@printpkbjj');

	Route::get('/searchnimosmb', 'FrontController@indexosmb');
	Route::post('/searchnimosmb', 'FrontController@indexsearchosmbx');
	Route::get('/searchnimosmb/print/{nim}', 'FrontController@printosmb');

	Route::get('/sertifikat-kegiatan', 'FrontController@indexkegiatan')->name('sertifikat.kegiatan');
	Route::get('/sertifikat-kegiatan/cari', 'FrontController@indexkegiatansearch');
	Route::get('/sertifikat-kegiatan/print/{id}', 'FrontController@printkegiatan');

	Route::get('/bahan-ajar','BAController@index')->name('bahan-ajar.index');

	Route::get('/formulir-ttm-atpem', 'FrontController@indexttmatpem')->name('ttm-atpem.index');
	Route::get('/formulir-ttm-atpem/cari', 'FrontController@carittmatpem')->name('ttm-atpem.cari');
	Route::post('/formulir-ttm-atpem/simpan', 'FrontController@simpan')->name('ttm-atpem.simpan');

	Route::get('/grafik', 'GrafikController@index')->name('grafik.index');
	Route::get('/grafik/excela', 'GrafikController@exporta')->name('grafik.exporta');
	Route::get('/grafik/excelb', 'GrafikController@exportb')->name('grafik.exportb');
	Route::get('/grafik/excelc', 'GrafikController@exportc')->name('grafik.exportc');
	Route::get('/grafik/exceld', 'GrafikController@exportd')->name('grafik.exportd');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function(){
	Route::get('/home', function () {
	    return view('home');
	});
	
	Route::get('/main', 'HomeController@index');
	Route::get('refresh_captcha', 'HomeController@refreshcaptcha')->name('refresh_captcha');

	Route::resource('mpkbjj','MPkbjjController');
	Route::post('/mpkbjj/search', 'MPkbjjController@search');
	Route::get('/mpkbjj/edit/{nim}', 'MPkbjjController@edit');
	Route::post('/ImportPesertaPkbjj', 'ImportController@importpkbjj');
	Route::get('/SearchPkbjj', 'MPkbjjController@indexsearch');
	Route::post('/SearchPkbjjX', 'MPkbjjController@indexsearchx');
	Route::get('/pkbjj/print/{nim}', 'MPkbjjController@print');

	Route::resource('osmb', 'OsmbController');
	Route::post('/osmb/search', 'OsmbController@search');
	Route::get('/osmb/edit/{nim}', 'OsmbController@edit');
	Route::post('/ImportPesertaOsmb', 'ImportController@importosmb');
	Route::get('/SearchOsmb', 'OsmbController@indexsearch');
	Route::post('/SearchOsmbX', 'OsmbController@indexsearchx');
	Route::get('/osmb/print/{nim}', 'OsmbController@print');

	Route::get('/disporseni','disporseniController@add')->name('disporseni');
	Route::get('/disporseni/cari','disporseniController@index')->name('disporseni.index');
	Route::post('/disporseni/cari_nim','disporseniController@cari')->name('disporseni.cari');
	Route::post('/disporseni','disporseniController@simpan')->name('disporseni.simpan');
	Route::post('/disporseni/import', 'ImportController@importDisporseni');
	Route::get('/disporseni/print/{nim}', 'disporseniController@print');

	Route::resource('sertifikat', 'TutorController');
	Route::post('/sertifikat/search', 'TutorController@search');
	Route::get('/sertifikat/edit/{nim}', 'TutorController@edit');
	Route::post('/sertifikat/update/{nim}', 'TutorController@update');

	Route::post('/ImportPesertaTutor', 'ImportController@importtutor');

	Route::get('/cari', 'TutorController@indexsearch')->name('sertifikat.cari');
	Route::post('/SearchTutorX', 'TutorController@indexsearchx');
	Route::get('/sertifikat/print/{id_tutor}', 'TutorController@print');

	Route::group(['prefix'=> 'sertifikat-all'], function()
	{
		Route::get('form','SertifikatAllController@form')->name('sertifikatall.form');
		Route::post('simpan','SertifikatAllController@simpan')->name('sertifikatall.simpan');
		Route::get('peragaan','SertifikatAllController@peragaan')->name('sertifikatall.peragaan');
		Route::get('/cari','SertifikatAllController@cari');
		Route::get('cetak','SertifikatAllController@peragaancetak')->name('sertifikatall.peragaancetak');
		Route::get('/cetak/cari','SertifikatAllController@caricetak');
		Route::get('/cetak/{id}','SertifikatAllController@print');

		Route::get('/edit/{id}','SertifikatAllController@edit')->name('sertifikatall.edit');
		Route::post('/edit/{id}','SertifikatAllController@update');
		Route::get('/delete/{id}','SertifikatAllController@delete')->name('sertifikatall.delete');
	});

	Route::group(['prefix'=> 'surat-masuk'], function()
	{
		Route::resource('sm', 'SMController');
		Route::post('sm/simpan', 'SMController@simpan');
		Route::post('sm/cari', 'SMController@cari');
		Route::get('cetak', 'SMController@cetakindex');
		Route::get('/disposisi/print/{no_agenda}', 'SMController@printdisposisi');
		Route::get('/sm/edit/{no_agenda}', 'SMController@editsm');
		Route::post('/sm/edit/{no_agenda}', 'SMController@updatesm');
		Route::get('/sm/delete/{no_agenda}', 'SMController@hapus');
		Route::get('peragaan/agenda', 'SMController@agenda')->name('surat-masuk.agenda');
		Route::post('peragaan/agenda/cari', 'SMController@cari_buku_agenda');
		Route::get('peragaan/cetak_buku_agenda', 'SMController@cetak_agenda');
	});

	Route::group(['prefix'=> 'surat-keluar'], function()
	{
		Route::resource('sk', 'SKController');
		Route::post('sk/simpan', 'SKController@simpan');
		Route::post('/sk/cari', 'SKController@search');
		Route::get('/cetak', 'SKController@cetak');
		Route::get('/sk/edit/{no_surat}', 'SKController@editsk');
		Route::post('/sk/edit/{no_surat}', 'SKController@updatesk');
		Route::get('/sk/delete/{no_surat}', 'SKController@hapus');
	});

	Route::resource('disposisi', 'DisposisiController');

	Route::group(['prefix'=> 'surket-mahasiswa'], function()
	{
		Route::resource('surket', 'SurketController');
		Route::post('/search', 'SurketController@search');
		Route::post('/surket/simpan', 'SurketController@simpan');
		Route::get('/peragaan','SurketController@peragaan');
		Route::post('/peragaan', 'SurketController@raga');
		Route::get('/rekap','SurketController@rekap');
		Route::post('/rekap', 'SurketController@rekapx');
		Route::get('/edit/{no_surat}', 'SurketController@edit');
		Route::post('/editx/{no_surat}', 'SurketController@updatex');
		Route::get('/print/{no_surat}', 'SurketController@print');
	});
	
	Route::group(['prefix'=> 'surket-ijazah'], function()
	{
		Route::resource('surketijazah', 'SurketIjazahController');
	    Route::post('/search','SurketIjazahController@search');
	    Route::get('/print/{nim}','SurketIjazahController@print');
	    Route::get('/raga','SurketIjazahController@raga');
	    Route::post('/raga','SurketIjazahController@ragax');
	});

	Route::group(['prefix'=> 'graduation'], function()
	{
		Route::resource('fotoijazah', 'FotoIjazahController');
		Route::post('/fotoijazah/search', 'FotoIjazahController@search');
		Route::post('/fotoijazah/peragaan', 'FotoIjazahController@peragaan');
		Route::get('/fotoijazah/print/{nim}', 'FotoIjazahController@print');
		Route::get('/rekap-penyerahan-foto-ijazah', 'FotoIjazahController@rekap')->name('fotoijazah.rekap');
		Route::get('/fotoijazah/rekappenyerahanfoto', 'FotoIjazahController@rekap');
		Route::post('/fotoijazah/rekappenyerahanfotox', 'FotoIjazahController@rekapsearch');
		Route::get('peragaan/foto/proses-kirim', 'FotoIjazahController@kirimindex')->name('fotoijazah.kirimindex');
		Route::post('peragaan/foto/proses-kirim/search', 'FotoIjazahController@kirimsearch');

		Route::resource('ijazah', 'IjazahController');
		Route::post('/ijazah/search', 'IjazahController@search');
		Route::post('/ijazah/peragaan', 'IjazahController@peragaan');
		Route::get('peragaan/ijazah/buku-besar', 'IjazahController@bukubesar')->name('ijazah.bukubesar');
		Route::post('peragaan/ijazah/buku-besar/bbsearch', 'IjazahController@bbsearch');

		Route::resource('take-ijazah', 'AmbilIjazahController');
		Route::post('/take-ijazah/search', 'AmbilIjazahController@search');
		Route::post('/take-ijazah/update/{nim}', 'AmbilIjazahController@updatex');

		Route::resource('sk-upi', 'SKUPIController');
		Route::post('/sk-upi/search', 'SKUPIController@search');

		Route::resource('upi', 'UPIController');
		Route::get('upbjj/upi/pendaftaran', 'UPIController@buatupi')->name('upi.pendaftaran');
		Route::post('upbjj/upi/pendaftaran/simpan', 'UPIController@simpan');
		Route::post('upbjj/upi/pendaftaran/search', 'UPIController@search');
		Route::get('upbjj/upi/peragaan', 'UPIController@peragaan')->name('upi.peragaan');
		Route::post('upbjj/upi/peragaan/cari', 'UPIController@cari');
	});

	Route::resource('ban-pt', 'BANPTController');

	Route::resource('biodata', 'BiodataController');

	Route::resource('programstudi', 'ProgramStudiController');

	Route::resource('nomorsertifikat', 'NoSertifikatController');

	Route::resource('user', 'UserController');


});
