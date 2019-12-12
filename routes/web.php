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

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/login/recruteur','Auth\LoginController@showRecruteurLoginForm')->name('recru');
Route::get('/login/candidat','Auth\LoginController@showCandidatLoginForm')->name('can');
Route::get('register/recruteur','Auth\RegisterController@showRecruteurRegisterForm')->name('recruteur');
Route::get('register/candidat','Auth\RegisterController@showCandidatRegisterForm')->name('candidat');

Route::post('/login/recruteur','Auth\LoginController@recruteurLogin');
Route::post('/login/candidat','Auth\LoginController@candidatLogin');
Route::post('/register/recruteur','Auth\RegisterController@createRecruteur');
Route::post('/register/candidat','Auth\RegisterController@createCandidat');

Route::view('/home','home')->middleware('auth');
Route::view('/recruteur','recruteur');
Route::view('/candidat','candidat');
Route::view('/loginrecruteur','loginrecruteur');
Route::view('/logincandidat','logincandidat');

Route::get('recruteurdashboard', function () {
    return view('recruteurdashboard');
});

Route::get('candidatdashboard', function () {
    return view('candidatdashboard');
})->name('lol');
Route::get('acceuil', function () {
    return view('acceuil');
});

Route::get('profil','CandidatProfileController@profile')->name('profil');
Route::post('profil','CandidatProfileController@update_avatar');

Route::get('profil1','RecruteurProfileController@profile1')->name('profil1');
Route::post('profil1','RecruteurProfileController@update_avatar1');

 Route::get('offres','OffreController@indexo'); 
 Route::get('offres/createo/{id}','OffreController@createo');    
 Route::post('offres','OffreController@storeo'); 
 Route::get('offres/{id}/edito','OffreController@edito');
 Route::put('offres/{id}','OffreController@updateo');
 Route::delete('offres/{id}','OffreController@destroyo'); 

// Route::view('/offres/createo','offres/createo');