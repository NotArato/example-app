<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     $title = 'Welcome to My Website';
//     $name = 'Arato';
//     return view('welcome', compact('title', 'name'));
// });

// Route::get('/about', function () {
//     $abouttitle = 'About Us';
//     return view('about', compact('abouttitle'));
// });

// Route::get('/contact', function () {
//     $contact = 'My Contact';
//     return view('contact', compact('contact'));
// });

// Route::get('/services', function () {
//     $serv = 'Our Services';
//     $info = 'Contact us for more information';
//     return view('services', compact('serv', 'info'));
// });

// Route::get('/products', function () {
//     return view('products');
// });

Route::get('/', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/form', [FormController::class, 'create']);
Route::post('/form/store', [FormController::class, 'store']);


Route::get('/contact-table', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/contact-edit/{id}/edit', [ContactController::class, 'edit']);
Route::put('/contact/{id}/', [ContactController::class, 'update']);
Route::delete('/contact/{id}', [ContactController::class, 'destroy']);