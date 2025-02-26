<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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


// Basic Routing
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Welcome';
// });

// Route::get('/about', function () {
//     return 'Evan Diantha Fafian : 2341760163';
// });



// Route Parameters
// Route::get('/user/{name}', function ($name) {
//     return 'My name is ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Article Page with ID = ' . $id;
// });



// Optional Parameters
// Route::get('/user/{name?}', function ($name = null) {
//     return 'My name is ' . $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya' . $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });



// Route Name
// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

//  Generating URLs...
// $url = route('profile');

// Generating Redirects...
// return redirect()->route('profile');



// Route Group and Route Prefixes
// Route::middleware(['first', 'second'])->group(function () {
// Route::get('/', function () {
// Uses first & second middleware...
// });

// Route::get('/user/profile', function () {
// Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });



// Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });



// Redirect Routes
// Route::redirect('/here', '/there');



// View Routes
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);






// Controller
// // Creating Controller
// Route::get('/hello', [WelcomeController::class, 'hello']);

// Modification Creating Controller
// Post, Get, Put, Delete
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::post('/', [PageController::class, 'index']);
// Route::post('/about', [PageController::class, 'about']);
// Route::post('/articles/{id}', [PageController::class, 'articles']);

// Route::put('/', [PageController::class, 'index']);
// Route::put('/about', [PageController::class, 'about']);
// Route::put('/articles/{id}', [PageController::class, 'articles']);

// Route::delete('/', [PageController::class, 'index']);
// Route::delete('/about', [PageController::class, 'about']);
// Route::delete('/articles/{id}', [PageController::class, 'articles']);


// Resource Controller
use App\Http\Controllers\PhotoController;

Route::resource('photo', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);
