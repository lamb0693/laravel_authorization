<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use \Illuminate\Support\Facades\Gate;

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
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/items/index', [ItemController::class, 'index'] )

        ->name('items.index');

    Route::get('/items/create', [ItemController::class, 'create'] )

        ->name('items.create');

    Route::post('/items/store', [ItemController::class, 'store'] )

        ->name('items.store');

    Route::get('/items/{item}', [ItemController::class, 'show'] )

        ->name('items.show');

    Route::get('/items/{item}/edit', [ItemController::class, 'edit'] )

        ->name('items.edit');

    Route::put('/items/{item}', [ItemController::class, 'update'] )

        ->name('items.update');

    Route::delete('/items/{item}', [ItemController::class, 'destroy'] )

        ->name('items.destroy');

});



require __DIR__.'/auth.php';
