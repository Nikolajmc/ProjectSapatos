<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/', [HomeController::class, 'index']);

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/product', [AdminController::class, 'product']);
route::post('/uploadproduct', [AdminController::class, 'uploadProduct']);
route::get('/showproduct', [AdminController::class, 'showProduct']);
route::get('/deleteproduct/{id}', [AdminController::class, 'deleteProduct']);
route::get('/updateview/{id}', [AdminController::class, 'updateView']);
route::post('/updateproduct/{id}', [AdminController::class, 'updateProduct']);
route::get('/search', [HomeController::class, 'search']);
route::post('/addcart/{id}', [HomeController::class, 'addCart']);
route::get('/showcart', [HomeController::class, 'showCart']);