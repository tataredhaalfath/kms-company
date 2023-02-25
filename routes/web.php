<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\WebProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/blog/detail/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
//Testimonial
Route::post('/testimonial/create', [WebProfileController::class, 'storeTestimonial'])->name('testimonial.store');


Route::prefix('admin')
    ->namespace('admin')
    ->middleware(['auth', 'IsAdmin'])
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Article
        Route::get('/article', [ArticleController::class, 'index'])->name('article.list');
        Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
        Route::post('/article/edit', [ArticleController::class, 'edit'])->name('article.edit');
        Route::put('/article/update', [ArticleController::class, 'update'])->name('article.update');
        Route::delete('/article/delete', [ArticleController::class, 'delete'])->name('article.delete');

        // File
        Route::get('/file/images', [FileController::class, 'index'])->name('image.index');
        Route::post('/file/image/store', [FileController::class, 'store'])->name('image.store');
        Route::delete('/file/image/destroy', [FileController::class, 'destroy'])->name('image.drop');

        // About Us
        Route::get('/about-us', [WebProfileController::class, 'about'])->name('about.index');
        Route::post('/aout-us', [WebProfileController::class, 'storeAbout'])->name('about.store');
        Route::delete('/about-us', [WebProfileController::class, 'destroyAbout'])->name('about.delete');
        // Testimonial
        Route::get('/testimoni', [WebProfileController::class, 'listTestimonial'])->name('testimonial.list');
        Route::delete('/testimonial/delete', [WebProfileController::class, 'destroyTestimonial'])->name('testimonial.delete');
    });




Auth::routes();
