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


Route::get('/','FontEndController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Admin/Dashboard','AdminController@Dashboard');
Route::get('/home','NotifyController@index');
Route::get('/news-details/{id}','FontEndController@showPost');
Route::get('/find-doctor','SearchController@index');
Route::get('/services-all','FontEndController@serviceShow');
Route::get('/contact-us','FontEndController@contact');
Route::post('/search-result','SearchController@result');
Route::post('/blood-search','BloodController@Search');

Route::get('/admin/all-patient','AddmissionController@showAll');
Route::post('/admin/patient-search','AddmissionController@search');
Route::get('/booking-all','AdminController@BookManage');
Route::get('/meet-my-team','FontEndController@meet');

//page route

//medicine
Route::get('/medicine','MedicineController@showMedicine');
Route::get('/medicine-doctors/{name}','MedicineController@show');
Route::get('/doctor-details/{id}','MedicineController@showDoctor');

//gyaenocology

Route::get('/gyaenocology','MedicineController@showgyae');



//surgery 
Route::get('/surgery','SurgeryController@showAll');
Route::get('/surgery-doctors/{name}','SurgeryController@show');
Route::get('/profile','MedicineController@profile');
Route::post('/doctor-book','MedicineController@store')->middleware('auth');;
Route::get('/blood-bank','BloodController@index');


//admin panel 

Route::get('/admin','AdminController@index');
Route::post('/Adminlogin','AdminController@AdminLogin');
Route::get('/admin/dashboard','AdminController@Dashboard');
Route::resource('/hms/service','ServiceController');
Route::resource('/hms/doctor','DoctorController');
Route::resource('/hms/medicine','MedicineCategoryController');
Route::resource('/hms/surgery','SurgeryController');
Route::resource('/hms/blog','BlogController');
Route::get('/booking-all','AdminController@Bookings');


//Patient Addmission
Route::get('/patient-addmission','AddmissionController@index');
Route::post('/patient-addmission','AddmissionController@store');
Route::get('/patient-addmission/edit/{id}','AddmissionController@edit');
Route::post('/patient-addmission/update/{id}','AddmissionController@update');
Route::post('/patient-addmission/delete/{id}','AddmissionController@destroy');



