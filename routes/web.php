<?php

use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('about-us')->group(function () {
    Route::get('/overview', function () {
        return view('about-us.overview');
    })->name('about-us.overview');

    Route::get('/message', function () {
        return view('about-us.message');
    })->name('about-us.message');

    Route::get('/member', function () {
        return view('about-us.member');
    })->name('about-us.member');

    Route::get('/executive-team', function () {
        return view('about-us.team');
    })->name('about-us.team');
});

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/our-partners', function () {
    return view('partner');
})->name('partner');

Route::get('/investors', function () {
    return view('investor');
})->name('investor');

Route::prefix('media')->group(function () {
    Route::get('/overview', function () {
        return view('media.overview');
    })->name('media.overview');

    Route::get('/internal-reports', function () {
        return view('media.report');
    })->name('media.report');

    Route::get('/press-release', function () {
        return view('media.press');
    })->name('media.press');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin.index');
    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');
    Route::resource('/news', 'NewsController');
});
