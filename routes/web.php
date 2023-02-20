<?php

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
    $comics = config('comics.series');
    $pages = config('comics.pages');
    return view('index', compact('comics', 'pages'));
});

Route::get('/comic-detail/{id}', function($id) {
    $comics = config('comics.series');
    $pages = config('comics.pages');
    $detail = '';
    foreach($comics as $key => $item) {
        if($id == $key) {
            $detail = $item;
        }
    }

    return view('comic-detail', compact('comics', 'pages', 'detail'));
})->name('comic-detail');

/*
Route::get('comics/{param}', function ($param) {
    $comics = config('comics.series');

    $products = array_filter($comics, function($item) use($param) {
        return $item['titolo'] == $param;
    });

    return view('comic-detail', compact('products'));
})->name('detail-product');
*/