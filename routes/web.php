<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductsController;
use App\http\Controllers\PostsController;

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

// Route::get('/', [PagesController::class, 'index']);

// 컨트롤러를 사용할때는 어레이를 넣고 컨트롤러와 함수를 넣어준다.
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/about', [ProductsController::class, 'about']);



//URI 사용하기
Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);

Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');


// //새로운 방법
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// //레거시 방법
// Route::get('/products', 'ProductsController@index');



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


// Posts endpoints

Route::get('/posts', [PostsController::class, 'index']);