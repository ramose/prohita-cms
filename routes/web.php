<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', [ClientController::class, "index"]);
// Client
Route::get('/client', [ClientController::class, "index"])->middleware(['auth', 'verified'])->name('client');
Route::get('/client/create', [ClientController::class, "create"])->middleware(['auth', 'verified'])->name('create');
Route::post('/client/store', [ClientController::class, "store"]);
Route::get('/client/{id}/edit', [ClientController::class, "edit"])->middleware(['auth', 'verified'])->name('edit');
Route::put('/client/{id}', [ClientController::class, "update"]);
Route::delete('/client/{id}', [ClientController::class, "destroy"]);

// Permit
Route::get('/permit', [PermitController::class, "index"])->middleware(['auth', 'verified'])->name('permit');
Route::get('/permit/create', [PermitController::class, "create"])->middleware(['auth', 'verified'])->name('create');
Route::post('/permit/store', [PermitController::class, "store"]);
Route::get('/permit/{id}/edit', [PermitController::class, "edit"])->middleware(['auth', 'verified'])->name('edit');
Route::put('/permit/{id}', [PermitController::class, "update"]);
Route::delete('/permit/{id}', [PermitController::class, "destroy"]);

// Transaction
Route::get('/transaction', [TransactionController::class, "index"])->middleware(['auth', 'verified'])->name('transaction');
Route::get('/transaction/create', [TransactionController::class, "create"])->middleware(['auth', 'verified'])->name('create');
Route::post('/transaction/store', [TransactionController::class, "store"]);
Route::get('/transaction/{id}/edit', [TransactionController::class, "edit"])->middleware(['auth', 'verified'])->name('edit');
// Route::put('/permit/{id}', [PermitController::class, "update"]);
// Route::delete('/permit/{id}', [PermitController::class, "destroy"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/clients', function () {
//     return view('clients');
// });

require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');