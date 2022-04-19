<?php

use App\Http\Controllers\App\AuthorsController;
use App\Http\Controllers\App\BlogFormController;
use App\Http\Controllers\App\BlogPageController;
use App\Http\Controllers\App\CommentsController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PostCategoriesController;
use App\Http\Controllers\App\PostsController;
use App\Http\Controllers\App\RatingsController;
use App\Http\Controllers\App\SeoPageController;
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

// home page
Route::get('/', HomeController::class)->name('home');

// seo page
Route::get('seo', SeoPageController::class)->name('seo');


Route::view('about-us', 'site.pages.about-us')->name('about-us');
Route::view('team', 'site.pages.team')->name('team');
Route::view('testimonials', 'site.pages.testimonials')->name('testimonials');
Route::view('job', 'site.pages.job')->name('job');

// blog
Route::get('blog', BlogPageController::class)->name('blog');
Route::get('blog/{slug}', PostsController::class)->name('blog.single');
Route::get('blog/category/{slug}', PostCategoriesController::class)->name('blog.category');
//
Route::post('blog', BlogFormController::class)->name('blog.form');

// author
Route::get('/authors/{slug}', AuthorsController::class)->name('author');

// comments
Route::post('comments', CommentsController::class)->name('comments.store');


// rating
Route::post('ratings/{post}', RatingsController::class)->name('ratings.store');


Route::view('cases', 'site.pages.cases')->name('cases');
Route::view('cases/{slug}', 'site.pages.cases-single')->name('cases.single');
Route::view('contacts', 'site.pages.contacts')->name('contacts');

