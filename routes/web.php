<?php

use Illuminate\Support\Facades\Route;
// crear rol de admin y cliente
// use Spatie\Permission\Models\Role;
// Role::create(['name'=>'admin']);
// Role::create(['name'=>'cliente']);
// Se ha comentado porque se hace una vez

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
