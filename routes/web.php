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
//Admin
Route::get('/register','Auth/RegisterController@index')->name('register');
Route::get('/home','HomeController@index')->name('home');
Route::get('/admin/dashboard','AdminController@index')->name('dashboard');
Route::get('/admin/ticket','TicketController@index')->name('ticket');
Route::resource('admin/ticket','TicketController');
Route::get('admin/datasync','DataBackupController@index')->name('datasync');
Route::get('blotter/createblotter','CreateBlotterController@index');
Route::resource('blotter/createblotter','CreateBlotterController');
Route::get('blotter/subpoena','SubpoenaController@index');
Route::get('bpinformation/announcements','AnnouncementList@index');
Route::get('bpinformation/updateannouncements','UpdateAnnouncement@index');
Route::resource('bpinformation/updateannouncements','UpdateAnnouncement');
Route::get('clerk/addresident','AddResident@index');
Route::resource('clerk/addresident','AddResident');
Route::get('clerk/residentsearch','ResidentSearch@index');
Route::get('blotter/settlement','SettlementReport@index');
Route::get('blotter/retrieveblotterrecord','RetrieveBlotter@index');
Route::get('/viewforms','DownloadForms@index')->name('viewforms');
Route::get('barangayclearance/print','PdfController@index');


