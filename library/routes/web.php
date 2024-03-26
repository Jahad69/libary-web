<?php

use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\Admincontroller;

    use App\Http\Controllers\HomeController;

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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/home',[Admincontroller::class,'index'])->middleware(['auth','admin']);

route::get('/category_page',[Admincontroller::class,'category_page'])->middleware(['auth','admin']);

route::post('/add_category',[Admincontroller::class,'add_category'])->middleware(['auth','admin']);

route::get('/cat_delete/{id}',[Admincontroller::class,'cat_deletes'])->middleware(['auth','admin']);

route::get('/edit_category/{id}',[Admincontroller::class,'edit_category'])->middleware(['auth','admin']);

route::post('/update_category/{id}',[Admincontroller::class,'update_category'])->middleware(['auth','admin']);

route::get('/add_book',[Admincontroller::class,'add_book'])->middleware(['auth','admin']);

route::post('/store_book',[Admincontroller::class,'store_book'])->middleware(['auth','admin']);

route::get('/show_book',[Admincontroller::class,'show_book'])->middleware(['auth','admin']);

route::get('/book_delete/{id}',[Admincontroller::class,'book_delete'])->middleware(['auth','admin']);

route::get('/edit_book/{id}',[Admincontroller::class,'edit_book'])->middleware(['auth','admin']);

route::post('/update_book/{id}',[Admincontroller::class,'update_book'])->middleware(['auth','admin']);

route::get('/book_details/{id}',[HomeController::class,'book_details']);

route::get('/details',[HomeController::class,'details']);

route::get('/borrow_books/{id}',[HomeController::class,'borrow_books']);

route::get('/borrow_request',[Admincontroller::class,'borrow_request'])->middleware(['auth','admin']);

route::get('/approve_book/{id}',[Admincontroller::class,'approve_book'])->middleware(['auth','admin']);

route::get('/return_book/{id}',[Admincontroller::class,'return_book'])->middleware(['auth','admin']);

route::get('/rejected_book/{id}',[Admincontroller::class,'rejected_book'])->middleware(['auth','admin']);

route::get('/book_history',[HomeController::class,'book_history']);

route::get('/cancel_request/{id}',[HomeController::class,'cancel_request']);

route::get('/explore',[HomeController::class,'explore']);

route::get('/search',[HomeController::class,'search']);

route::get('/cat_search/{id}',[HomeController::class,'cat_search']);
