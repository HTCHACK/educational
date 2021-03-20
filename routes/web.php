<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CoursesController;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('contacts', 'ContactsController');
Route::resource('galleries', 'GalleriesController')->only('create', 'index', 'store');
Route::resource('posts', 'PostsController')->only('create', 'index', 'store');
Route::resource('comments', 'CommentsController');
Route::resource('courses', 'CoursesController')->only('create', 'index', 'store');
Route::resource('emails', 'EmailController')->only('create', 'index', 'store');


Route::get('/contactus', 'ContactsController@ContactPage')->name('contactus.index');
Route::get('/ourgallery', 'GalleriesController@GalleryPage')->name('ourgallery.index');
Route::get('/postus/{id}', [PostsController::class, 'show'])->name('postus.show');
Route::get('/courseus', [CoursesController::class, 'CoursesPage'])->name('courseus.index');
Route::get('/courseus/{id}', [CoursesController::class, 'show'])->name('courseus.show');



Route::group(['prefix'=>'admin','middleware' => 'auth'], 
function () 
{
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('/contacts', 'ContactsController')->only('index','destroy');
    Route::resource('/galleries', 'GalleriesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/posts', 'PostsController');
    Route::resource('/comments', 'CommentsController')->only('index');
    Route::resource('/courses', 'CoursesController');
    Route::resource('/emails', 'EmailController')->only('index','destroy');
});


Route::get('/user/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('force_to_logout');