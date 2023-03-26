<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('belships.index');
})->middleware(['auth', 'verified'])->name('belships.index');

Route::get('/about', function () {
    return view('belships.about');
})->middleware(['auth', 'verified'])->name('belships.about');

Route::get('/our-crew', function () {
    return view('belships.our-crew');
})->middleware(['auth', 'verified'])->name('belships.our-crew');

Route::get('/vessel-list', function () {
    return view('belships.vessel-list');
})->middleware(['auth', 'verified'])->name('belships.vessel-list');

Route::get('/contact', function () {
    return view('belships.contact');
})->middleware(['auth', 'verified'])->name('belships.contact');

Route::get('/articles', function () {
    return view('articles.index');
})->middleware(['auth', 'verified'])->name('articles.index');

//Job Routes
Route::resource('jobs', JobController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy', 'show'])
    ->middleware(['auth', 'verified']);
    
//Employee Routes
Route::resource('employees', EmployeeController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy', 'show'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
