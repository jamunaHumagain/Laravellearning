<?php
use App\Http\Controllers\add;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
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
//     return view('add');
// });



// Route::get('/add', [add::class, 'showForm']);

// Route::post('/add', [add::class, 'addNumbers']);


// use App\Http\Middleware\EnsureTokenIsValid;
// Route::get('/', function () {

// })->middleware(EnsureTokenIsValid::class);


// Route::get('/test', [TestController::class, 'test']);

// Route::resource('posts', PostController::class)->middleware('auth');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/layouts/main', function () {
    return view('admin.layouts.dashboard');
});

// Route::resource('article', ArticleController::class)->middleware('auth');

// Route::get('/article', function () {
//     return view('article');
// });



// Route::resource('article', ArticleController::class);

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
// Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
// Route::put('/article/{id}/update', [ArticleController::class, 'update']);
// Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);

Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/article/{id}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/admin/article/{id}', [ArticleController::class, 'destroy'])->name('admin.article.destroy');
Route::delete('/admin/article/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
