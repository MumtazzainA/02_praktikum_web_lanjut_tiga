<?php

use App\Http\Controllers\contactCtrl;
use App\Http\Controllers\potoCtrl;
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
//1
Route::get('/home', function () {
    return redirect('https://www.educastudio.com/');
});
//2
Route::prefix('product')->group(function () {
    Route::get('/Games', function () {
       return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/KidsGame', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/books', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/song', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});
//3
Route::get('/new/{id}', function ($id) {
    if($id=='news'){
        return redirect('https://www.educastudio.com/news');
    }
    else if($id=='covid'){
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
});
//4
Route::prefix('product')->group(function () {
    Route::get('/Karir', function () {
       return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/Magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/Kunjungan', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});
//5
Route::get('/About', function () {
    return redirect('https://www.educastudio.com/about-us');
});

//6
Route::resource('contact', contactCtrl::class)->only([
    'index'
]);
   