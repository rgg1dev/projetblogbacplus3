<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\GithubController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Route::get('/admin/articles',[ArticleController::class,'index'])->middleware('admin')->name('articles.index');
Route::get('/admin/articles/create',[ArticleController::class,'create'])->middleware('admin')->name('articles.create');
Route::post('/admin/articles/store',[ArticleController::class,'store'])->middleware('admin')->name('articles.store');
Route::delete('/articles/{article}/delete',[ArticleController::class,'delete'])->middleware('admin')->name('articles.delete');
Route::get('/admin/articles/{article}/edit',[ArticleController::class,'edit'])->middleware('admin')->name('articles.edit');
Route::put('/admin/articles/{article}/update',[ArticleController::class,'update'])->middleware('admin')->name('articles.update');


| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});


*/

Route::get('/',[MainController::class,'home'])->name('home');
Route::get('/articles',[MainController::class,'index'])->name('articles');
Route::get('/articles/{article:slug}',[MainController::class,'show'])->name('article');

Auth::routes();

// Route::prefix('admin')->middleware('admin')->group(function(){
 //    Route::resource('articles',ArticleController::class)->except([
      //   'show'
  //  ]);
//});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/auth/github' ,[GithubController::class , 'auth'] )->name('github.auth');
Route::get('/auth/github/redirect' ,[GithubController::class , 'redirect'] )->name('github.redirect');
