<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'content'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::module('posts');
        Route::module('postCategories');
    });

    Route::group(['prefix' => 'authors'], function () {
        Route::module('authors');
        Route::module('comments');
        Route::module('questions');;
    });

    Route::module('posts');
    Route::module('works');
    Route::module('authors');
});

Route::group(['prefix' => 'team'], function () {
    Route::group(['prefix' => 'employees'], function () {
        Route::module('employees');
        Route::module('departments');
    });
    Route::module('employees');
    Route::module('vacancies');
});

Route::group(['prefix' => 'clients'], function () {
    Route::module('clients');
    Route::module('testimonials');
});


Route::group(['prefix' => 'feedback'], function () {
    Route::module('emails');
    Route::module('subscribers');
});



