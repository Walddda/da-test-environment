<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
Route::get('/helo', function () {
    return 'Hello World';
});
Route::get('/1', function () {
    return view('greeting', ['name' => 'Adam']);
});;
Route::get('/test', [TestController::class, 'show']);


// Route for the login form
Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

