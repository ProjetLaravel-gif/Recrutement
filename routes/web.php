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
    return view('acceuil');
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
});
Route::get('acceuil', function () {
    return view('acceuil');
});

Route::get('profil','CandidatProfileController@profile')->name('profil');
Route::post('profil','CandidatProfileController@update_avatar');

 Route::get('profil1','RecruteurProfileController@profile1')->name('profil1');
Route::post('profil1','RecruteurProfileController@update_avatar1');
Route::get('recruteur/{id}/editprofil','RecruteurProfileController@editprofil');
Route::put('recruteur/{id}','RecruteurProfileController@updateprofil');

// Route::get('recruteur/editprofil','RecruteurProfileController@profile1');
// Route::post('recruteur/editprofil','RecruteurProfileController@update_avatar1');


 Route::get('offres','OffreController@indexo'); 
 Route::get('offres/createo/{id}','OffreController@createo');    
 Route::post('offres','OffreController@storeo'); 
 Route::get('offres/{id}/edito','OffreController@edito');
 Route::put('offres/{id}','OffreController@updateo');
 Route::delete('offres/{id}','OffreController@destroyo'); 

 // route du cv
 // Route::get('formations/formation','FormationController@formation');
 // Route::get('formations/competence','FormationController@competence');
 // Route::get('formations/experience','FormationController@experience');

 // Route::resource('cvs','CvController');
 Route::get('cvs','CvController@ig bbndex');
 Route::get('cvs/create/{id}','CvController@create');    
 Route::post('cvs','CvController@store')->name('cvs'); 
 Route::get('cvs/{id}/edit','CvController@edit');
 Route::put('cvs/{id}','CvController@update');
 Route::get('cvs/{id}','CvController@show');
 Route::delete('cvs/{id}','CvController@destroy');
 Route::get('getFormations','CvController@getFormations');
   
   // route formation
   Route::get('formations','FormationController@index');
   Route::get('formations/create/{id}','FormationController@create') ;    
   Route::post('formations','FormationController@store'); 
 // route Experience
   Route::get('experiences','ExperienceController@index');
   Route::get('experiences/create/{id}','ExperienceController@create') ;    
   Route::post('experiences','ExperienceController@store'); 
  // route Experience
   Route::get('competences','CompetenceController@index');
   Route::get('competences/create/{id}','CompetenceController@create') ;    
   Route::post('competences','CompetenceController@store'); 

Route::get('Cv/index', function () {
    return view('Cv/index');
});
Route::get('Cv/formation', function () {
    return view('Cv/formation');
})->name('lol');

Route::get('Cv/experience', function () {
    return view('Cv/experience');
});

Route::get('recruteur/editprofil', function () {
    return view('recruteur/editprofil');
});