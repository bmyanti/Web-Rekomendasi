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

Route::get('/', function () {
    return view('welcome');

});

Route::get('admin_page',
    ['as' => 'admin_page', 'uses' => 'AdminController@index']);

Route::get('admin_page/tentang',
    ['as' => 'tentang', 'uses' => 'AdminController@tentang']);

Route::get('admin_page/bantuan',
    ['as' => 'bantuan', 'uses' => 'BantuanController@edit']);

Route::get('admin_page/program_studi',
    ['as' => 'program_studi', 'uses' => 'AdminController@program_studi']);

Route::get('admin_page/statistik',
    ['as' => 'statistik', 'uses' => 'StatistikaController@statistik']);
Route::get('admin_page/statistikRekomendasi',
    ['as' => 'statistikRekomendasi', 'uses' => 'StatistikaController@statistikRekomendasi']);

Route::get('isadmin', array('as' => 'isadmin', function()
	{
		return view('login');
	}));
Route::get('help_page', array('as' => 'help_page', function()
	{
		return view('help_page');
	}));
Route::get('about_page', array('as' => 'about_page', function()
	{
		return view('about_page');
	}));
Route::get('add_profil_ist', array('as' => 'add_profil_ist', function()
	{
		return view('add_ist_profil');
	}));

Route::post('add_profil_ist',
    ['as' => 'coba', 'uses' => 'AdminController@store']);

Route::get('inputdata', array('as' => 'inputdata', function()
	{
		return view('inputdata');
	}));


Route::get('welcome', array('as' => 'welcome', function()
	{
		return view('welcome');
			}));

Route::get('input_nilai_uan', array('as' => 'input_nilai_uan', function()
	{
		return view('input_nilai_uan');
	}));
Route::get('ujian_un', array('as' => 'ujian_un', function()
	{
		return view('inputdataun');
	}));
Route::get('berhasil', array('as' => 'berhasil', function()
	{
		return view('berhasil');
	}));

Route::get('halaman_ist', array('as' => 'halaman_ist', function()
	{
		return view('pengantar_ujian_ist');
	}));
Route::get('soal_ist', array('as' => 'soal_ist', function()
	{
		return view('soal_ist');
	}));

Route::post('pengantar_ist_soal_me',
    ['as' => 'pengantar_ist_soal_me_calc', 'uses' => 'istController@pengantar_soal_me']);

Route::post('ist_soal_me',
    ['as' => 'ist_soal_me_calc', 'uses' => 'istController@finishME']);

Route::post('ist_se_soal',
    ['as' => 'ist_soal_se_calc', 'uses' => 'istController@finishSE']);

Route::post('ist_an_soal',
    ['as' => 'ist_soal_an_calc', 'uses' => 'istController@finishAN']);

Route::post('ist_fa_soal',
    ['as' => 'ist_soal_fa_calc', 'uses' => 'istController@finishFA']);

Route::post('ist_ge_soal',
    ['as' => 'ist_soal_ge_calc', 'uses' => 'istController@finishGE']);

Route::post('ist_ra_soal',
    ['as' => 'ist_soal_ra_calc', 'uses' => 'istController@finishRA']);

Route::post('ist_wa_soal',
    ['as' => 'ist_soal_wa_calc', 'uses' => 'istController@finishWA']);

Route::post('ist_wu_soal',
    ['as' => 'ist_soal_wu_calc', 'uses' => 'istController@finishWU']);

Route::post('ist_zr_soal',
    ['as' => 'ist_soal_zr_calc', 'uses' => 'istController@finishZR']);

Route::post('ist_finish',
    ['as' => 'ist_finish_calc', 'uses' => 'istController@allRes']);

Route::get('soal_wa', array('as' => 'soal_wa', function()
	{
		return view('soal_ist_wa');
	}));


Route::get('soal_an', array('as' => 'soal_an', function()
	{
		return view('soal_ist_an');
	}));

Route::get('soal_ge', array('as' => 'soal_ge', function()
	{
		return view('soal_ist_ge');
	}));


Route::get('soal_ra', array('as' => 'soal_ra', function()
	{
		return view('soal_ist_ra');
	}));

Route::get('soal_zr', array('as' => 'soal_zr', function()
	{
		return view('soal_ist_zr');
	}));

Route::get('soal_fa', array('as' => 'soal_fa', function()
	{
		return view('soal_ist_fa');
	}));

Route::get('soal_wu', array('as' => 'soal_wu', function()
	{
		return view('soal_ist_wu');
	}));


Route::get('soal_me', array('as' => 'soal_me', function()
	{
		return view('soal_ist_me');
	}));


Route::resource('data_un','UNController@store');

Route::resource('siswa_data','InputDataMhwController');
Route::resource('un_data','UNController');

Route::resource('administrator', 'AdminController');
Route::resource('addIst', 'AddIstController');
Route::resource('uan', 'UanController');
Route::resource('grafik', 'StatistikaController');
Route::resource('help', 'BantuanController');

Route::get('admin_page/edit_ist/{id_programstudy}',
    ['as' => 'edit_ist', 'uses' => 'AdminController@edit']);

Route::get('adding_ist',
    ['as' => 'adding_ist', 'uses' => 'AdminController@store_ist_profil']);

Route::get('admin_page/edit_un/{id_programstudy}',
    ['as' => 'edit_un', 'uses' => 'UanController@edit']);
Route::get('login',
    ['as' => 'admin_page', 'uses' => 'LoginController@LoginPage']);

Route::post('login',
    ['as'=>'validation_login', 'uses' => 'LoginController@LoginValidation']);


Route::get('logout',
    ['as' => 'logout', 'uses' => 'LoginController@logout']);