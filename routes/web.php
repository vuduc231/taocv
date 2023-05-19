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
    return view('index');
});

Route::get('/tim-viec-lam', function () {
    return view('page.job.job');
});
Route::get('/chi-tiet-viec-lam', function () {
    return view('page.detailJob.detailJob');
});
Route::get('/mau-cv', function () {
    return view('page.templateCV.templateCV');
});
Route::get('/quan-ly-cv', function () {
    return view('page.managerCV.managerCV');
});
Route::get('/viet-cv', function () {
    return view('page.writeCV.writeCV');
});
Route::get('/tin-tuc', function () {
    return view('page.new.new');
});
Route::get('/tin-tuc/{title}', function () {
    return view('page.new.new-detail');
});

// 'prefix' => 'admin', 'middleware' => 'auth'
// Route::group([], function () {
//     Route::get('/dashboard', 'Admin\DashboardController@index');
//     Route::get('/users', 'Admin\UserController@index');
//     Route::post('/users/create', 'Admin\UserController@create');
// });
