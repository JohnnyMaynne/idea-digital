<?php

use App\Http\Controllers\App\AboutUsPageController;
use App\Http\Controllers\App\AuthorsController;
use App\Http\Controllers\App\BlogFormController;
use App\Http\Controllers\App\BlogPageController;
use App\Http\Controllers\App\CasesController;
use App\Http\Controllers\App\CommentsController;
use App\Http\Controllers\App\ContactsPageController;
use App\Http\Controllers\App\FeedbackController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PagesController;
use App\Http\Controllers\App\PostCategoriesController;
use App\Http\Controllers\App\PostsController;
use App\Http\Controllers\App\RatingsController;
use App\Http\Controllers\App\SearchController;
use App\Http\Controllers\App\SeoPageController;
use App\Http\Controllers\App\ServicesController;
use App\Http\Controllers\App\TeamPageController;
use App\Http\Controllers\App\TestimonialsPageController;
use App\Http\Controllers\App\VacanciesController;
use App\Http\Controllers\App\ViewsController;
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
Route::get('seo/', SeoPageController::class)->name('seo');

// pages
Route::get('about-us', AboutUsPageController::class)->name('about-us');
Route::get('team', TeamPageController::class)->name('team');
Route::get('testimonials', TestimonialsPageController::class)->name('testimonials');
Route::get('contacts', ContactsPageController::class)->name('contacts');

// blog
Route::get('blog', BlogPageController::class)->name('blog');
Route::get('blog/{slug}', PostsController::class)->name('blog.single');
Route::get('blog/category/{slug}', PostCategoriesController::class)->name('blog.category');
// ajax
Route::post('blog', BlogFormController::class)->name('blog.form');

// cases
Route::get('cases', [CasesController::class,'index'])->name('cases');
Route::get('cases/{slug}',[CasesController::class,'show'] )->name('cases.single');

// services
Route::get('services/{slug}', ServicesController::class)->name('services.show');


// vacancies
Route::get('jobs', [VacanciesController::class,'index'])->name('job');
Route::get('jobs/{slug}', [VacanciesController::class,'show'])->name('job.show');

// author
Route::get('/authors/{slug}', AuthorsController::class)->name('author');

// comments
Route::post('comments', CommentsController::class)->name('comments.store');


// rating
Route::post('ratings/{post}', RatingsController::class)->name('ratings.store');

// search
Route::post('search', SearchController::class)->name('search');


// feedback
Route::post('feedback', FeedbackController::class)->name('feedback');


// dynamic page
Route::get('/{slug}', PagesController::class)->name('page.show');

