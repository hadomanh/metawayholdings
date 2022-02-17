<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PressController;
use App\Models\Image;
use App\Models\News;
use App\Models\Press;
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
    $banner = Image::where('position', 'homeBanner')->get();
    return view('welcome')->with(compact('banner'));
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

Route::get('/business', function () {
    return view('business');
})->name('business');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::prefix('project')->group(function () {
    Route::get('/hyperas-chain', function () {
        return view('project.hyperas');
    })->name('project.hyperas');
    Route::get('/pindias', function () {
        return view('project.pindias');
    })->name('project.pindias');
    Route::get('/divega', function () {
        return view('project.divega');
    })->name('project.divega');
    Route::get('/rapital-bank', function () {
        return view('project.rapital');
    })->name('project.rapital');
});

Route::get('/our-partners', function () {
    return view('partner');
})->name('partner');

Route::prefix('investor')->group(function () {
    Route::get('/internal-reports', function () {
        return view('investor.report');
    })->name('investor.report');
    Route::get('/annual-finance-reports', function () {
        return view('investor.annual');
    })->name('investor.annual');
    Route::get('/investors', function () {
        return view('investor');
    })->name('investor');
});

Route::prefix('media')->group(function () {
    Route::get('/overview', function () {
        return view('media.overview');
    })->name('media.overview');

    Route::get('/internal-reports', function () {
        return view('media.report');
    })->name('media.report');

    Route::get('/news', function () {
        $news = News::where('active', true)->get();
        return view('media.news')->with(compact('news'));
    })->name('media.news');

    Route::get('/investor-news', function () {
        $news = News::where('active', true)->get();
        return view('media.investor-news')->with(compact('news'));
    })->name('media.invest-news');

    Route::get('/news/{id}', function ($id) {
        $news = News::find($id);
        return view('media.news-detail')->with(compact('news'));
    })->name('media.news-detail');

    Route::get('/press-release', function () {
        $press = Press::where('active', true)->get();
        return view('media.press')->with(compact('press'));
    })->name('media.press');

    Route::get('/press-release/{press}', function (Press $press) {
        return view('media.press-detail')->with(compact('press'));
    })->name('media.press-detail');
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

    Route::get('/press/toggle/{press}', [PressController::class, 'toggle'])->name('press.toggle');
    Route::post('/press/image', [PressController::class, 'imageUpload'])->name('press.image.upload');
    Route::resource('/press', 'PressController');

    Route::get('/index', [ImageController::class, 'index'])->name('image.index');
    Route::get('/create', [ImageController::class, 'create'])->name('image.create');
    Route::resource('/image', 'ImageController');
});
