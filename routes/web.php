<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ContactController;



use App\Http\Controllers\BusController;

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

Route::get('accueil', function () {
    return view('accueil');
}) ->name("accueil");
Route::get('/contact', function () {

    return view("contact");
})-> name("contact");
Route::get('/reservez', function () {

    return view("reservez");
})-> name("reservez");
Route::get('/list', function () {

    return view("list");
})-> name("list");


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);




Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm']);
// routes/web.php
Route::post('/login', [AuthController::class, 'login'])->name('login');






// Liste des bus
Route::get('/bus', [BusController::class, 'index'])->name('bus.index');

// Afficher le formulaire pour ajouter un bus
Route::get('/bus/create', [BusController::class, 'create'])->name('bus.create');

// Ajouter un nouveau bus
Route::post('/bus', [BusController::class, 'store'])->name('bus.store');

// Afficher le formulaire pour modifier un bus
Route::get('/bus/{id}/edit', [BusController::class, 'edit'])->name('bus.edit');

// Mettre à jour les informations d'un bus
Route::put('/bus/{id}', [BusController::class, 'update'])->name('bus.update');

// Supprimer un bus
Route::delete('/bus/{id}', [BusController::class, 'destroy'])->name('bus.destroy');







