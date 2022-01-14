<?php

use Illuminate\Support\Facades\Route;

//use DB;
use App\Http\Controllers\stripeController;

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

//Route::get('/', function () {
//
//    //$contact = DB::select("select * from contact  where user_id='$user_id'");
//    $contact = DB::table('contact')->get() ;
//
//    return view ('index',['contact'=>$contact]);
//    //return view('index');
//});
//Route::get('/', function () {
//
//
//
//    return view ('index');
//    //return view('index');
//});

Auth::routes([
    'register' => true,
]);

//Route::get('/dashboard',function(){
//    return view('dashboard');
//
//});
//Route::get('/index',function(){
//    return view('index');
//
//});

Route::get('/','indexController@index')->name('index');



Route::get('/adminlogin',function(){
    return view('admin/adminlogin');

});

//Route::get('/admin',function(){
//    return view('admin/adminhome');
//
//});

//Route::get('/admin',function(){
//    return view('admin/adminlogin');
//
//});


//Route::get('booking/create','bookController@insertform')->name('book.insert');

Route::get('booking/create','bookController@insertform')->name('book.insert');


Route::get('instructor/create','addInstructorController@insertform')->name('instructor.insert');
Route::get('user/delete/{id}', 'registerController@destroy');


Route::get('instructor/adminview','addInstructorController@viewAdminInstructor')->name('instructor.adminview');
Route::get('instructor/delete/{id}', 'addInstructorController@destroy');


Route::get('instructor/view','addInstructorController@viewInstructor')->name('instructor.view');
Route::post("updateInstructor/{id}",'addInstructorController@update');
Route::get('instructor/update/{id}','addInstructorController@updateForm')->name('instructor.update');



Route::get('booking/view','bookController@viewBooking')->name('booking.view');
Route::get('book/delete/{id}', 'bookController@destroy');
Route::get('booking/delete/{id}', 'bookController@del');



Route::get('booking/update/{id}','bookController@updateForm')->name('book.update');
Route::post("update/{id}",'bookController@update');
Route::post("updateIns/{id}",'bookInstructorController@update');
Route::get('hire/update/{id}','bookInstructorController@updateForm')->name('hire.update');



//Route::get('book/update/{id}', 'bookController@update');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report', 'reportController@index')->name('report');
Route::get('/reportIns', 'reportController@instruct')->name('reportIns');
Route::get('/chart', 'reportController@chart')->name('chart');
Route::get('/overall', 'reportController@overall')->name('overall');
Route::get('/overBook', 'reportController@overBook')->name('overBook');
Route::get('/overIns', 'reportController@overIns')->name('overIns');

Route::get('/reportUser', 'userReportController@indexUser')->name('reportUser');
Route::get('/reportInstruct', 'userReportController@indexInstruct')->name('reportInstruct');



Route::get('insert','bookController@insertform');

Route::post("create",'bookController@insert');
Route::post('contact/insert','contactController@insert');
Route::get('info/adminview','contactController@insertinfo')->name('info.adminview');
Route::get('info/view','contactController@display')->name('info.view');
Route::post("contact",'contactController@insert');

Route::get('contact/update','contactController@view')->name('info.update');



//Route::post('getform','registerController@insert');
//Route::get('insert','registerController@insertform');

Route::post('fillform','addInstructorController@insert');
Route::get('insert','addInstructorController@insertform');



Route::get('instructor/views','bookInstructorController@viewsInstructor')->name('instructor.views');
Route::get('book/instructor/{id}','bookInstructorController@insertform')->name('book.instructor');
Route::post('bookInstructor',[\App\Http\Controllers\bookInstructorController::class,'insert'])->name('instructorBook');
Route::get('instructor/show','bookInstructorController@showInstructor')->name('instructor.show');
Route::get('hire/show','bookInstructorController@showHire')->name('hire.show');
Route::get('hire/delete/{id}', 'bookInstructorController@destroy');

Route::get('booking/adminview','bookController@viewAdminBooking')->name('booking.adminview');
Route::get('admin/adminview','registerController@view')->name('booking.adminview');



Route::get('adminHire/delete/{id}', 'bookInstructorController@delete');
Route::get('instructor/viewhire','bookInstructorController@display')->name('hire.view');



Route::get('booking/pay/{id}','stripeController@payForm')->name('book.pay');
Route::post('/stripe', [stripeController::class,'stripePayment'])->name("stripe.post");

Route::get('hire/pay/{id}','stripeController@hireForm')->name('hire.pay');
Route::post('/stripePay', [stripeController::class,'hirePay'])->name("stripe.pay");




Route::get('booking/invoice/{id}','bookInvoiceController@view')->name('book.invoice');
Route::get('hire/invoice/{id}','bookInvoiceController@viewIns')->name('hire.invoice');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post("adminlog",'AdminController@dash');


Route::post("dateReport",'reportController@search');
//Route::get('/date', 'reportController@viewdate')->name('date');

Route::post("dateReport1",'reportController@search1');
//Route::get('/date1', 'reportController@viewdate1')->name('date1');
