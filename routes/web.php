<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekkaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('nav',"navbar");



// Route::get('login',[PekkaController::class,'login']);


// Route::post('login-user',[PekkaController::class,'loginUser'])->name('login-user');


// Route::get('/dashboard',[PekkaController::class,'dashboard'])->name('dashboard');


// Route::get('/logout',[PekkaController::class,'logout']);





// Route::view('/',"index");

Route::view('about',"about");
Route::view('gallery',"gallery");
Route::view('services',"services");
Route::view('con',"contact");
Route::view('edit',"edit_service");


Route::post('/contact/store', [pekkaController::class, 'store'])->name('Contact.store');



// Route::view('/dash', 'auth.dashboard')->name('dashboard');




Route::get('/contacts', [pekkaController::class, 'showContacts']);

// Route::get('/auth/contact_enquiry', [pekkaController::class, 'showContacts']);



Route::get('/add_service', [pekkaController::class,'creates']);



Route::post('/services',[pekkaController::class,'adddata']);
// ;
// Route::post('/add_service/stores', [pekkaController::class, 'stores'])->name('add_services.stores');
Route::get('/list_add',[pekkaController::class,'listnew']);


Route::get('edit/{id}',[pekkaController::class,'showdata']);
          //here edits page given form action path edit


 Route::post('/edit', [PekkaController::class, 'update']);

 Route::get('delete/{id}',[PekkaController::class,'delete']);

  Route::get('/',[pekkaController::class,'list_index']);



  Route::get('login',[pekkaController::class,'login']);


  Route::post('login-user',[pekkaController::class,'loginUser'])->name('login-user');
  
  
  Route::get('/dashboard',[pekkaController::class,'dashboard']);
  
  
  Route::get('/logout',[pekkaController::class,'logout']);  
  
  



