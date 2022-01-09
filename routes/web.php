<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;
use function PHPUnit\Framework\returnSelf;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileInformationController;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::view('contact', 'contact');
// Route::view('about', 'about');
// Route::view('profile', 'profile');
// // pake request get
// // Route::get('profile', function (Request $request){
// //     $name = $request->name;
// //     return view('profile', ['name'=>$name]);
// // });

// Route::get('profile/{username}/{post}', function($username,$post){
//     return view('profile', ['name'=>$username, 'post'=>$post]);
// });

// Route::view('posts/first-post', 'posts.first-post');

//Mulai menggunakan controller
Route::get('/', HomeController::class);
Route::get('profile/{identifier}', ProfileInformationController::class);
Route::get('contact', [ContactController::class, 'create']);
Route::post('contact', [ContactController::class, 'store']);

//penulisan route biasa per satu method crud.
// Route::get('tasks', [TaskController::class, 'index']);
// Route::post('tasks', [TaskController::class, 'store']);
// Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
// Route::put('tasks/{id}', [TaskController::class, 'update']);
// Route::delete('tasks/{id}', [TaskController::class, 'destroy']);


Route::get('users',[UserController::class, 'index']);
Route::get('users/{user:username}',[UserController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class)->middleware('auth');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware(['guest'])->group(function () {

    Route::get('register', [RegistrationController::class, 'create'])->name('register'); //->middleware('guest') bisa pake gini
    Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']); //valid jika ftidak diberi name karena otomatis akan terdeteksi
});
