<?php


use App\Http\Controllers\HomeController;
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




Route::get('/login', [App\Http\Controllers\AccountController::class, 'loginGet'])->name('loginpage');

Route::post('/login', [App\Http\Controllers\AccountController::class, 'loginPost'])->name('login');

Route::get('/logout', [App\Http\Controllers\AccountController::class, 'logout'])->name('logout');

Route::get('/register',function(){
    return view('register.index');
})->name('register');

Route::group(['middleware' => 'auth'], function () {
    //dependency injection
    Route::get('/', [HomeController::class, 'index']);
    /*Route::get('/', function () {
        return (new App\Http\Controllers\HomeController())->index();
    });*/
    Route::get('/tasks',[App\Http\Controllers\TasksController::class,'index']);
//tasks.create route
    Route::get('/tasks/create', [App\Http\Controllers\TasksController::class, 'create']);

    Route::get('/about', function () {
        return json_encode([
            'name' => 'John Doe',
            'age' => 30,]);
    });
});


