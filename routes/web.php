<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/dashboard/posts', [PostController::class, 'index'])->name('posts');
    // Route::get('/dashboard/posts/new', [PostController::class, 'create'])->name('post-create');
});

Route::controller(PostController::class)->group(function () {
    Route::prefix('posts')->group(function () {
        Route::get('/', 'index')->name('posts');
        Route::get('/', 'create')->name('post.create');
        Route::get('/', 'edit')->name('post.edit');
        Route::put('/', 'update')->name('post.update');
        Route::post('/', 'store')->name('post.store');
        Route::get('/', 'destroy')->name('post.delete');
    });
})->middleware(['auth', 'verified']);

Route::controller(CategoryController::class)->group(function () {
    Route::prefix('categories')->group(function(){
        Route::get('/', 'index')->name('categories');
        Route::get('/', 'create')->name('category.create');
        Route::get('/', 'edit')->name('category.edit');
        Route::get('/', 'update')->name('category.update');
        Route::get('/', 'store')->name('category.store');
        Route::get('/', 'destroy')->name('category.delete');
    });
})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
