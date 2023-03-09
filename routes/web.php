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

// Route that redirects to a view page
Route::get('/', function () {
    return view('home');
});

// Route to users - string
Route::get('/users', function () {
    return '<h1>Welcome to the users page</h1>';
});

// 다른 API 와 같이 같은 라우트 주소가 있을때 가장 마지막에 선언된 것으로 연결함.
// Route to users - Array(제이손)
Route::get('/users', function () {
    return ['PHP', 'HTML', 'LARAVEL'];
});

// Route to users - 제이손 오브젝트
Route::get('/users', function () {
    return response()->json([
        'name' => 'Ryan',
        'course' => 'Laravel course for beginners'
    ]);
});

// Route to users - 함수
Route::get('/users', function () {
    return redirect('/');
});