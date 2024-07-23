<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/contact', function(){
   return view('contact', ['name' => 'Belajar Laravel', 'phone' => '082134889']);   
});

# Redirect Route
//Route::redirect('/contact', '/contact-us');

# View Route 
//Route::view('/contact', 'contact', ['name' => 'Belajar Laravel', 'phone' => '082134889']);

# Route dgn parameter
// Route::get('/product/{id}', function($id) {
//    return 'ini adalah product dengan id '.$id; 
// });

Route::get('/product/{id}', function($id) {
   return view('product.detail', ['id' => $id]);
});

#Prefix Route
//* Prefix Route inni memudahkan kita ketika prefix ini berganti2

Route::prefix('admin')->group(function() {
    Route::get('/profile-admin', function() {
        return 'profile admin';
    });
    
    Route::get('/about-admin', function() {
        return 'about admin';
    });
    
    Route::get('contact-admin', function() {
        return 'contact admin';
    });
});

#Menampilkan List Route
//*php artisan route:list = ini akan menampilkan route2 yang sudah kita buat