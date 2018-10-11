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

Route::get('/','Welcome@index');
Auth::routes();
Route::get('/register','Auth\RegisterController@index')->name('register');
//Admin
Route::get('/home','HomeController@index')->name('home');
Route::get('/admin/dashboard','AdminController@index')->name('dashboard');
Route::get('/admin/ticket','TicketController@index')->name('ticket');
Route::resource('admin/ticket','TicketController');
Route::get('admin/datasync','DataBackupController@index')->name('datasync');
Route::get('blotter/createblotter','CreateBlotterController@index');
Route::resource('blotter/createblotter','CreateBlotterController');
Route::get('bpinformation/announcements','AnnouncementList@index');
Route::resource('bpinformation/announcements','AnnouncementList');
Route::get('bpinformation/updateannouncements','UpdateAnnouncement@index');
Route::resource('bpinformation/updateannouncements','UpdateAnnouncement');
Route::get('clerk/addresident','AddResident@index');
Route::resource('clerk/addresident','AddResident');
Route::get('clerk/residentsearch','ResidentSearch@index');
Route::get('clerk/nonresident', 'NonResidentController@index');
Route::get('clerk/inhabitant','PendingResidentController@index');
Route::get('blotter/retrieveblotterrecord','RetrieveBlotter@index');
Route::get('/viewforms','DownloadForms@index')->name('viewforms');
Route::get('barangayclearance/print','PdfController@index');
Route::get('/citizen/citizenhome','CitizenHome@index');
// Exception routes
Route::get('exception/index', 'ExceptionController@index');
