<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    return redirect('prodotti');;
})->name('home');

Route::get('/prodotti', function () {
        // gli passo pasta.php dalla cartella config
        $data = config('pasta');
        $data = json_decode($data);
        return view('prodotti', ['data' => $data]);
		// aggiungo un alias
})->name('prodotti');

Route::get('/prodotti/show/{id}', function ($id) {
    $data = config("pasta");
    $data = json_decode($data, true);

    return view('prodotto-singolo', ['data' => $data[$id]]);
});

Route::get('/news', function () {
    return view('news');
})->name('news');
