<?php
declare(strict_types = 1);

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('optionalpartindex', 'App\Http\Controllers\CourseController')->name('optionalpart.index');
// Route::get('optionalpartcreate', 'App\Http\Controllers\CourseController')->name('optionalpart.create');

Route::resource('course', 'App\Http\Controllers\CourseController');
Route::resource('education', 'App\Http\Controllers\EducationController');
Route::resource('admin', 'App\Http\Controllers\AdminController');
Route::put('changeadmin', 'App\Http\Controllers\AdminController@changeAdminRole')->name('admin.changeadmin');
Route::get('changeadminpage', 'App\Http\Controllers\AdminController@changeAdminRolePage')
->name('admin.changeadminrolepage');

Route::put('linkcourse', 'App\Http\Controllers\CourseController@linkCourse')->name('course.linkcourse');
Route::get('linkcoursepage', 'App\Http\Controllers\CourseController@linkCoursePage')->name('course.linkcoursepage');
Route::get('educationcourseindex', 'App\Http\Controllers\CourseController@educationCourseIndex')
->name('course.educationcourseindex');
Route::get('educationcourseshow', 'App\Http\Controllers\CourseController@educationCourseShow')
->name('course.educationcourseshow');
// $this->get('/admin/optionalpart/', '\App\Http\Controllers\CourseController');

// Route::get('/admin/optionalpart/index', '\App\Http\Controllers\CourseController');
