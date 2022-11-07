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

// test 

Route::get('/test', function () {
    return view('test.index');
});
Route::get('/aa', function () {
    return view('test.test');
});


Route::get('/bb', function () {
    return view('kidds.devoir.timeup');
});


Route:: get ('/انتهى الوقت',[App\Http\Controllers\KiddsController::class, 'bb'])->name('bb')->middleware('auth');


// login registre tlmidh we walyy
Auth::routes();
// accueill tlmidh we walyy
Route:: get ('/index',[App\Http\Controllers\KiddsController::class, 'index'])->name('index');
Route:: get ('/logout_kidds',[App\Http\Controllers\KiddsController::class, 'logout'])->name('logout_kidds');

Route:: get ('/index1',[App\Http\Controllers\KiddsController::class, 'index1'])->name('index1')->middleware('auth');
Route:: get ('/index2',[App\Http\Controllers\KiddsController::class, 'index2'])->name('index2')->middleware('auth');
Route:: get ('/drous',[App\Http\Controllers\KiddsController::class, 'drous'])->name('drous')->middleware('auth');
Route:: get ('/categdrous',[App\Http\Controllers\KiddsController::class, 'categdrous'])->name('categdrous')->middleware('auth');
Route:: get ('/categidmajya',[App\Http\Controllers\KiddsController::class, 'categidmajya'])->name('categidmajya')->middleware('auth');
Route:: get ('/categidmajya1',[App\Http\Controllers\KiddsController::class, 'categidmajya1'])->name('categidmajya1')->middleware('auth');
Route:: get ('/droustest',[App\Http\Controllers\KiddsController::class, 'devoirtest'])->name('devoirtest')->middleware('auth');
Route:: get ('/dars2',[App\Http\Controllers\KiddsController::class, 'dars2'])->name('dars2')->middleware('auth');
Route:: get ('/dars3',[App\Http\Controllers\KiddsController::class, 'dars3'])->name('dars3')->middleware('auth');


Route:: get ('/resetDars3',[App\Http\Controllers\KiddsController::class, 'resetDars3'])->name('resetDars3')->middleware('auth');
Route:: get ('/idmaj1',[App\Http\Controllers\KiddsController::class, 'idmaj1'])->name('idmaj1')->middleware('auth');

Route:: get ('/resetidmaj',[App\Http\Controllers\KiddsController::class, 'resetidmaj'])->name('resetidmaj')->middleware('auth');

Route:: get ('/resetDars2',[App\Http\Controllers\KiddsController::class, 'resetDars2'])->name('resetDars2')->middleware('auth');
Route:: post ('/s3',[App\Http\Controllers\KiddsController::class, 's3'])->name('s3')->middleware('auth');
Route:: post ('/s4',[App\Http\Controllers\KiddsController::class, 's4'])->name('s4')->middleware('auth');
Route:: post ('/s5',[App\Http\Controllers\KiddsController::class, 's5'])->name('s5')->middleware('auth');
Route:: get ('/about',[App\Http\Controllers\KiddsController::class, 'about'])->name('about');
Route:: get ('/contact',[App\Http\Controllers\KiddsController::class, 'contact'])->name('contact');



// profile 
Route:: get ('/profilee',[App\Http\Controllers\KiddsController::class, 'profile'])->name('profilee')->middleware('auth');
Route:: post ('/Modifierprofilee',[App\Http\Controllers\KiddsController::class, 'Modifierprofile'])->name('Modifierprofilee')->middleware('auth');
Route:: get ('/changemdpe',[App\Http\Controllers\KiddsController::class, 'changemdp'])->name('changemdpe')->middleware('auth');
Route:: get ('/Affichemodifiere',[App\Http\Controllers\KiddsController::class, 'Affichemodifier'])->name('Affichemodifiere')->middleware('auth');
Route:: get ('/notfound',[App\Http\Controllers\KiddsController::class, 'notfound'])->name('notfound')->middleware('auth');
Route:: get ('/indexidmajya',[App\Http\Controllers\KiddsController::class, 'indexidmajya'])->name('indexidmajya')->middleware('auth');
Route:: get ('/indexautre',[App\Http\Controllers\KiddsController::class, 'indexautre'])->name('indexautre')->middleware('auth');


Route:: get ('/indexdrous',[App\Http\Controllers\KiddsController::class, 'indexdrous'])->name('indexdrous')->middleware('auth');

Route:: get ('/devoirr',[App\Http\Controllers\KiddsController::class, 'devoir'])->name('devoir')->middleware('auth');
Route:: get ('/text',[App\Http\Controllers\KiddsController::class, 'text'])->name('text')->middleware('auth');

Route:: post ('/update_passwordd',[App\Http\Controllers\KiddsController::class, 'update_password'])->name('update_passwordd')->middleware('auth');

Route:: post ('/AjoutContactus',[App\Http\Controllers\KiddsController::class, 'AjoutContactus'])->name('AjoutContactus');


    // devoirrrrrrrrr
Route:: post ('/dd',[App\Http\Controllers\KiddsController::class, 's1'])->name('s1')->middleware('auth');
Route:: post ('/s2',[App\Http\Controllers\KiddsController::class, 's2'])->name('s2')->middleware('auth');



Route:: get ('/reset/{id}',[App\Http\Controllers\KiddsController::class, 'reset'])->name('reset')->middleware('auth');
Route:: get ('/resetD/{id}',[App\Http\Controllers\KiddsController::class, 'resetD'])->name('resetD')->middleware('auth');


// login admin 

Route::namespace('Admin')->group(function()  {

Route::get('/admin1', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin1',[App\Http\Controllers\Admin\Auth\LoginController::class, 'Login']);




// button modifier profile admin
Route::post('/profile',[App\Http\Controllers\Admin\AdminController::class, 'ModifierUser'])->name('profile');


Route:: get ('/adminn',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin2');
Route:: get ('/user/{id}',[App\Http\Controllers\Admin\AdminController::class, 'user'])->name('user');
Route:: get ('/eleve',[App\Http\Controllers\Admin\AdminController::class, 'eleve'])->name('eleve');
Route:: get ('/supprimereleve/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimereleve'])->name('supprimereleve')->middleware('auth:admin');

Route:: get ('/supprimerensi/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerensi'])->name('supprimerensi')->middleware('auth:admin');

Route:: get ('/ensin',[App\Http\Controllers\Admin\AdminController::class, 'ensin'])->name('ensin');



Route:: get ('/supprimercontact/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimercontact'])->name('supprimercontact')->middleware('auth:admin');

Route:: get ('/contactadmin',[App\Http\Controllers\Admin\AdminController::class, 'contact'])->name('contactadmin');
Route:: get ('/feedback',[App\Http\Controllers\Admin\AdminController::class, 'feedback'])->name('feedback');
Route:: get ('/Devoiradmin',[App\Http\Controllers\Admin\AdminController::class, 'Devoir'])->name('Devoiradmin');
Route:: get ('/pageajoutDevoiradmin',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutDevoir'])->name('pageajoutDevoiradmin');
Route:: post ('/AjoutDevoiradmin',[App\Http\Controllers\Admin\AdminController::class, 'AjoutDevoiradmin'])->name('AjoutDevoiradmin');
Route:: get ('/supprimerDevoirAdmin/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerDevoirAdmin'])->name('supprimerDevoirAdmin');



Route:: get ('/idmajjj',[App\Http\Controllers\Admin\AdminController::class, 'idmajjj'])->name('idmajjj');
Route:: get ('/pageajoutidmaj',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutidmaj'])->name('pageajoutidmaj');
Route:: post ('/Ajoutidmajj',[App\Http\Controllers\Admin\AdminController::class, 'Ajoutidmajj'])->name('Ajoutidmajj');
Route:: get ('/supprimeridmajj/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimeridmajj'])->name('supprimeridmajj');





Route:: get ('/darss',[App\Http\Controllers\Admin\AdminController::class, 'darss'])->name('darss');
Route:: get ('/pageajoutdars',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutdars'])->name('pageajoutdars');
Route:: post ('/Ajoutdars',[App\Http\Controllers\Admin\AdminController::class, 'Ajoutdars'])->name('Ajoutdars');
Route:: get ('/supprimerdars/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerdars'])->name('supprimerdars');





Route:: get ('/pageajoutfile',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutfile'])->name('pageajoutfile');
Route:: post ('/Ajoutautrefile',[App\Http\Controllers\Admin\AdminController::class, 'Ajoutautrefile'])->name('Ajoutautrefile');
Route:: get ('/supprimerautrefile/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerautrefile'])->name('supprimerautrefile');




Route:: get ('/files1',[App\Http\Controllers\Admin\AdminController::class, 'files1'])->name('files1');

Route:: get ('/image',[App\Http\Controllers\Admin\AdminController::class, 'image'])->name('image');

Route:: get ('/vedos',[App\Http\Controllers\Admin\AdminController::class, 'vedos'])->name('vedos');





Route:: get ('/autree',[App\Http\Controllers\Admin\AdminController::class, 'autree'])->name('autree');
Route:: get ('/pageajoutautre',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutautre'])->name('pageajoutautre');
Route:: post ('/Ajoutautre',[App\Http\Controllers\Admin\AdminController::class, 'Ajoutautre'])->name('Ajoutautre');
Route:: get ('/supprimerautre/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerautre'])->name('supprimerautre');
Route:: get ('/supprimerautreimage/{id}',[App\Http\Controllers\Admin\AdminController::class, 'supprimerautreimage'])->name('supprimerautreimage');
Route:: get ('/resulatadmin',[App\Http\Controllers\Admin\AdminController::class, 'resulat'])->name('resulatadmin');



Route:: get ('/pageajoutimage',[App\Http\Controllers\Admin\AdminController::class, 'pageajoutimage'])->name('pageajoutimage');

Route:: post ('/Ajoutautreimage',[App\Http\Controllers\Admin\AdminController::class, 'Ajoutautreimage'])->name('Ajoutautreimage');






// devoir
Route:: get ('/resultatdevoiradmin',[App\Http\Controllers\Admin\AdminController::class, 'resultatdevoiradmin'])->name('resultatdevoiradmin');

Route:: get ('/Afficheresultatadmin/{id}',[App\Http\Controllers\Admin\AdminController::class, 'Afficheresultatadmin'])->name('Afficheresultatadmin');


// dars 1
Route:: get ('/resultatdevoirdars1',[App\Http\Controllers\Admin\AdminController::class, 'resultatdevoirdars1'])->name('resultatdevoirdars1');

Route:: get ('/Afficheresultatadmindars1/{id}',[App\Http\Controllers\Admin\AdminController::class, 'Afficheresultatadmindars1'])->name('Afficheresultatadmindars1');


//dars2
Route:: get ('/resultatdevoirdars2',[App\Http\Controllers\Admin\AdminController::class, 'resultatdevoirdars2'])->name('resultatdevoirdars2');

Route:: get ('/Afficheresultatadmindars2/{id}',[App\Http\Controllers\Admin\AdminController::class, 'Afficheresultatadmindars2'])->name('Afficheresultatadmindars2');




//dars3

Route:: get ('/resultatdevoirdars3',[App\Http\Controllers\Admin\AdminController::class, 'resultatdevoirdars3'])->name('resultatdevoirdars3');

Route:: get ('/Afficheresultatadmindars3/{id}',[App\Http\Controllers\Admin\AdminController::class, 'Afficheresultatadmindars3'])->name('Afficheresultatadmindars3');



//idmaj
Route:: get ('/resultatdevoiridmaj',[App\Http\Controllers\Admin\AdminController::class, 'resultatdevoiridmaj'])->name('resultatdevoiridmaj');

Route:: get ('/Afficheresultatadminidmaj/{id}',[App\Http\Controllers\Admin\AdminController::class, 'Afficheresultatadminidmaj'])->name('Afficheresultatadminidmaj');





Route:: get ('/changemdpee',[App\Http\Controllers\Admin\AdminController::class, 'changemdp'])->name('changemdp');

Route:: post ('/update_passwordddd',[App\Http\Controllers\Admin\AdminController::class, 'update_password'])->name('update_passwordddd');





});
Route:: get ('/registerr',[App\Http\Controllers\RegisterAdminController::class, 'index'])->name('registerr');
Route:: post ('/saveadmin',[App\Http\Controllers\RegisterAdminController::class, 'save'])->name('saveadmin');



















































// login prof 
Route::namespace('prof')->group(function()  {

    Route::get('/prof', [App\Http\Controllers\Prof\Auth\LoginController::class, 'showLoginForm'])->name('prof.login');
    Route::post('/prof',[App\Http\Controllers\Prof\Auth\LoginController::class, 'Login']);
    

    Route:: get ('/prof/home',[App\Http\Controllers\Prof\AdminController::class, 'index'])->name('prof');
    Route:: get ('/logoutt',[App\Http\Controllers\Prof\AdminController::class, 'logout'])->name('logoutt');
    


    Route:: get ('/profile',[App\Http\Controllers\Prof\AdminController::class, 'profile'])->name('profile');
    Route:: get ('/Affichemodifierprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'Affichemodifier'])->name('Affichemodifierprof');

    Route::post('/Modifierprofileprof',[App\Http\Controllers\Prof\AdminController::class, 'Modifierprofileprof'])->name('Modifierprofileprof');
    Route:: get ('/changemdp',[App\Http\Controllers\Prof\AdminController::class, 'changemdp'])->name('changemdpprof');
    Route::post('/update_password',[App\Http\Controllers\Prof\AdminController::class, 'update_password'])->name('update_password');

    



    // idmajj

    Route:: get ('/idmajjjprof',[App\Http\Controllers\Prof\AdminController::class, 'idmajjj'])->name('idmajjjprof');

    Route:: get ('/pageajoutidmajprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutidmaj'])->name('pageajoutidmajprof');

    Route::post('/Ajoutidmajjprof',[App\Http\Controllers\Prof\AdminController::class, 'Ajoutidmajj'])->name('Ajoutidmajjprof');

    Route:: get ('/supprimeridmajjprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimeridmajj'])->name('supprimeridmajjprof');

    
    
    
// dars

Route:: get ('/darssprof',[App\Http\Controllers\Prof\AdminController::class, 'darss'])->name('darssprof');

Route:: get ('/pageajoutdarsprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutdars'])->name('pageajoutdarsprof');

Route::post('/Ajoutdarsprof',[App\Http\Controllers\Prof\AdminController::class, 'Ajoutdars'])->name('Ajoutdarsprof');

Route:: get ('/supprimerdarsprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimerdars'])->name('supprimerdarsprof');

// devoir
Route:: get ('/Devoirprof',[App\Http\Controllers\Prof\AdminController::class, 'Devoir'])->name('Devoirprof');

Route:: get ('/pageajoutDevoirprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutDevoir'])->name('pageajoutDevoirprof');

Route::post('/AjoutDevoiradminprof',[App\Http\Controllers\Prof\AdminController::class, 'AjoutDevoiradmin'])->name('AjoutDevoiradminprof');

Route:: get ('/supprimerDevoirAdminprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimerDevoirAdmin'])->name('supprimerDevoirAdminprof');




// autre

Route:: get ('/autreeprof',[App\Http\Controllers\Prof\AdminController::class, 'autree'])->name('autreeprof');

Route:: get ('/pageajoutautreprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutautre'])->name('pageajoutautreprof');

Route::post('/Ajoutautreprof',[App\Http\Controllers\Prof\AdminController::class, 'Ajoutautre'])->name('Ajoutautreprof');

Route:: get ('/supprimerautreprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimerautre'])->name('supprimerautreprof');



// image

Route:: get ('/pageajoutimageprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutimage'])->name('pageajoutimageprof');


Route::post('/Ajoutautreimageprof',[App\Http\Controllers\Prof\AdminController::class, 'Ajoutautreimage'])->name('Ajoutautreimageprof');

Route:: get ('/supprimerautreimageprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimerautreimage'])->name('supprimerautreimageprof');


// file

Route:: get ('/pageajoutfileprof',[App\Http\Controllers\Prof\AdminController::class, 'pageajoutfile'])->name('pageajoutfileprof');


Route::post('/Ajoutautrefileprof',[App\Http\Controllers\Prof\AdminController::class, 'Ajoutautrefile'])->name('Ajoutautrefileprof');

Route:: get ('/supprimerautrefileprof/{id}',[App\Http\Controllers\Prof\AdminController::class, 'supprimerautrefile'])->name('supprimerautrefileprof');



Route:: get ('/files1prof',[App\Http\Controllers\Prof\AdminController::class, 'files1'])->name('files1prof');

Route:: get ('/imageprof',[App\Http\Controllers\Prof\AdminController::class, 'image'])->name('imageprof');
Route:: get ('/vedosprof',[App\Http\Controllers\Prof\AdminController::class, 'vedos'])->name('vedosprof');



































    });


    Route:: get ('/registerprof',[App\Http\Controllers\RegisterProfController::class, 'index'])->name('registerprof');
    Route:: post ('/saveadminn',[App\Http\Controllers\RegisterProfController::class, 'save'])->name('saveprof');
    

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
