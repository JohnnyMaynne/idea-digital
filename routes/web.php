<?php

use App\Http\Controllers\App\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::view('/seo', 'site.pages.seo')->name('seo');
Route::view('/about-us', 'site.pages.about-us')->name('about-us');
Route::view('/team', 'site.pages.team')->name('team');
Route::view('/testimonials', 'site.pages.testimonials')->name('testimonials');
Route::view('/job', 'site.pages.job')->name('job');
Route::view('/blog', 'site.pages.blog')->name('blog');
Route::view('/blog/{slug}', 'site.pages.blog-single')->name('blog.single');
Route::view('/cases', 'site.pages.cases')->name('cases');
Route::view('/cases/{slug}', 'site.pages.cases-single')->name('cases.single');
Route::view('/contacts', 'site.pages.contacts')->name('contacts');
