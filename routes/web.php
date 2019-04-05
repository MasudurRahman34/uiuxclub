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

// Route::get('/', function () {
//     return view('welcome');
// });
/*fronend routes*/
Route::get('/uxclub', 'frontend\CourseitemController@index')->name('uxclub');
Route::get('/singlecourse/{slug}', 'frontend\CourseitemController@show')->name('singlecourse.show');
Route::get('/members', 'frontend\MembersController@index')->name('members');
Route::get('/story', 'frontend\StoryController@index')->name('story');
Route::get('/contact', 'frontend\contactController@index')->name('contact');
Route::post('/contact/send', 'frontend\contactController@msg')->name('user.contact.msg');
/*end frontend*/

/*backend routs*/

/*admin route*/
Route::get('/uxclub/admin', 'backend\adminController@index')->name('uxclubadmin');
/*admin login routs*/
Route::get('/uxclub/admin/login', 'auth\admin\LoginController@showLoginForm')->name('uxclub.admin.login');
Route::post('/uxclub/admin/submit', 'auth\admin\LoginController@login')->name('admin.login.submit');
Route::post('/uxclub/admin/logout', 'auth\admin\LoginController@logout')->name('admin.logout');
Route::post('/uxclub/user/logout', 'auth\admin\LoginController@logout')->name('user.logout');
/*end admin login routs*/

/*end admin route*/
Route::post('/uxclub/user/login/submit', 'auth\usercontrol\LoginController@login')->name('user.login.submit');

/*admin courseitem route*/
Route::get('/uxclub/admin/addcourse', 'backend\CoursefileController@addcourse')->name('admin.addcourse');
Route::post('/uxclub/admin/storecourse', 'backend\CoursefileController@storecourse')->name('admin.store.course');
Route::get('/uxclub/admin/courselist', 'backend\CoursefileController@courselist')->name('admin.course.list');
Route::get('/uxclub/admin/course/edit/{id}', 'backend\CoursefileController@courseedit')->name('admin.edit.course');
Route::post('/uxclub/admin/course/edit/{id}', 'backend\CoursefileController@courseupdate')->name('admin.course.update');
Route::post('/uxclub/admin/course/delete/{id}', 'backend\CoursefileController@coursedestroy')->name('admin.course.delete');
/*end admin courseitem route*/

/* admin coursefile route*/
Route::get('/uxclub/admin/addcourse/file', 'backend\videofileController@addcoursefile')->name('admin.add.course.file');
Route::post('/uxclub/admin/store/course/file', 'backend\videofileController@storecoursefile')->name('admin.store.course.file');
Route::get('/uxclub/admin/course/file/list', 'backend\videofileController@coursefilelist')->name('admin.course.file.list');
Route::get('/uxclub/admin/course/file/edit/{id}', 'backend\videofileController@coursefileedit')->name('admin.edit.course.file');
Route::post('/uxclub/admin/course/file/edit/{id}', 'backend\videofileController@coursefileupdate')->name('admin.course.file.update');
Route::post('/uxclub/admin/course/file/delete/{id}', 'backend\videofileController@coursefiledestroy')->name('admin.course.file.delete');
/*end admin course file route*/

/* admin Story item*/
Route::get('/uxclub/admin/addstory/file', 'backend\storyfileContoller@addstory')->name('admin.add.story');
Route::post('/uxclub/admin/story/file', 'backend\storyfileContoller@store')->name('admin.store.file');
Route::get('/uxclub/admin/story/list', 'backend\storyfileContoller@storylist')->name('admin.story.file.list');
Route::get('/uxclub/admin/members/list', 'backend\membersControler@memberslist')->name('admin.members.list');
/*End admin Story item*/

Route::get('/uxclub/admin/contact/list', 'backend\contactContoller@contactlist')->name('admin.contact.list');
Route::post('/uxclub/admin/contact/reply/{id}', 'backend\contactContoller@reply')->name('admin.contact.reply');
/*end backend routs*/



Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
