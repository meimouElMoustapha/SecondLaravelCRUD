<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TestController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use App\Models\BlogPost;
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

 
//     return view('test');

// });



Route::get('/home3', function () {
    $data_name=BlogPost::all();
    // var_dump($data_name);
    return view('test',['data_name'=>$data_name]);
});




// Route::resource('photos', Schoolcontroller::class);





// Route::get('/r','App\Http\Controllers\TestController@home2')->name('home2');//also work
Auth::routes();
Route::get('',  [TestController::class, 'index3'])->name('index3');
//->middleware('auth');
Route::get('/Add_Student',  [TestController::class, 'Add_Student'])->name('Add_Student');

Route::post('/save-student',  [TestController::class, 'saveStudent'])->name('saveStudent');

Route::get('/posts/show',  [TestController::class, 'post_list'])->name('post_list');
//Route::get('/home1','App\Http\Controllers\TestController@index1');//also work
Route::get('/posts/create',  [TestController::class, 'create'])->name('create');
Route::post('/posts/store',  [TestController::class, 'store'])->name('store');
Route::get('/posts/show/{id}',  [TestController::class, 'show'])->name('show');
Route::get('/posts/edit/{id}',  [TestController::class,'edit'])->name('edit');
Route::patch('/posts/update/{id}',  [TestController::class,'update'])->name('update');
Route::get('/posts/destroy/{id}',  [TestController::class,'destroy'])->name('destroy')->name('destroy');
Route::get('logout', [TestController::class,'logout'])->name('logout')->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


