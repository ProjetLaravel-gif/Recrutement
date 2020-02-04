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
// Route::get('Cv/formulairecv', function () {
//     return view('Cv/formulairecv');
// });
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
Route::get('candidat/{id}/editprofil','CandidatProfileController@editprofil');
Route::put('candidat/{id}','CandidatProfileController@updateprofil');

 Route::get('profil1','RecruteurProfileController@profile1')->name('profil1');
Route::post('profil1','RecruteurProfileController@update_avatar1');
Route::get('recruteur/{id}/editprofil','RecruteurProfileController@editprofil');
Route::put('recruteur/{id}','RecruteurProfileController@updateprofil');

// Route::get('recruteur/editprofil','RecruteurProfileController@profile1');
// Route::post('recruteur/editprofil','RecruteurProfileController@update_avatar1');


 Route::get('offres','OffreController@mesjobs'); 
 Route::get('jobs','OffreController@jobs')->name('jobs');
 Route::get('statut/{id}','OffreController@statut');
 Route::get('listoffres','OffreController@indexo1');
 Route::post('/hhhhh','OffreController@postuler')->name('stp');
 Route::get('offres/createo/{id}','OffreController@createo');    
 Route::post('offres','OffreController@storeo'); 
 Route::get('offres/{id}/edito','OffreController@edito');
 Route::get('offres/{id}/detail','OffreController@detail');
 Route::get('offres/{id}/cdetail','OffreController@cdetail');
 Route::put('offres/{id}','OffreController@updateo');
 Route::delete('offres/{id}','OffreController@destroyo'); 
 Route::get('message','OffreController@message');
 Route::get('postuler','OffreController@voir');
  Route::get('stp/{nom}','OffreController@stp');
 // route du cv
 // Route::get('formations/formation','FormationController@formation');
 // Route::get('formations/competence','FormationController@competence');
 // Route::get('formations/experience','FormationController@experience');

 // Route::resource('cvs','CvController');
 Route::get('cvs','CvController@index');
 Route::get('cvs/create/{id}','CvController@create');    
 Route::post('cvs','CvController@store')->name('cvs'); 
 Route::get('cvs/{id}/edit','CvController@edit');
 Route::put('cvs/{id}','CvController@update');
 Route::get('cvs/{id}/details','CvController@details');
 Route::get('cvs/{id}','CvController@show');
 // Route::get('cvs/{id}','CvController@getFormation');
 Route::delete('cvs/{id}','CvController@destroy');

   
   // route formation
   Route::get('formations','FormationController@index');
   Route::get('formations/create/{id}','FormationController@create') ;    
   Route::post('formations','FormationController@store');
   Route::put('formations/{id}','FormationController@update'); 
   Route::get('getFormation/{id}','FormationController@getFormation');
   Route::get('addFormation','FormationController@addFormation');
   Route::delete('formations/{id}','FormationController@destroy');
 // route Experience
   Route::get('experiences','ExperienceController@index');
   Route::get('experiences/create/{id}','ExperienceController@create') ;    
   Route::post('experiences','ExperienceController@store');
   Route::put('experiences/{id}','ExperienceController@update');
   Route::get('getExperience/{id}','ExperienceController@getExperience');
   Route::get('addExperience','ExperienceController@addExperience');
   Route::delete('experiences/{id}','ExperienceController@destroy');
  // route Experience
   Route::get('competences','CompetenceController@index');
   Route::get('competences/create/{id}','CompetenceController@create') ;    
   Route::post('competences','CompetenceController@store'); 
   Route::put('competences/{id}','CompetenceController@update');
   Route::get('getCompetence/{id}','CompetenceController@getCompetence');
   Route::get('addCompetence','ExperienceController@addCompetence');
   Route::delete('competences/{id}','CompetenceController@destroy');

   // route favoris
   Route::get('favoris/{offre_id}','FavorisController@indexf'); 

Route::get('Cv/index', function () {
    return view('Cv/index');
});
Route::get('Cv/formation', function () {
    return view('Cv/formation');
})->name('lol');

Route::get('Cv/experience', function () {
    return view('Cv/experience');
});


Route::get('pipipi', function () {
    return view('pipipi');
});
Route::get('Cv/favoris', function () {
    return view('Cv/favoris');
});

Route::get('recruteur/editprofil', function () {
    return view('recruteur/editprofil');
}); 


Route::get('contact/createC/{id}','OffreController@createC');    
Route::post('contact','OffreController@storeC');







Route::get('simple', 'OffreController@index');

// Route::get('simple', function () {
//     return view('simple');
// }); 

// Route::get('simple', 'UserChartController@index');