<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Book;
use App\Models\Order;


//dashboard
Route::get('/', function(){
    return view('core.home');
})->name('dashboard');

//manage books apge
Route::get('/manage-books', function () {
    return view('core.manage_books');
})->name('manage.books');

//add book page
Route::get('/add-book', function () {
    return view('core.add_book');
})->name('add.book');

//add entry
Route::get('/add-entry', function () {
    return view('core.add_entry');
})->name('add.entry');

//order active
Route::get('/orders-active', function () {
    return view('core.orders');
})->name('orders.active');

//order all
Route::get('/orders-all', function () {
    return view('core.orders');
})->name('orders.all');

//add student
Route::get('/add-student', function () {
    return view('core.add_student');
})->name('add.student');


Route::get('/students', function () {
    return view('core.students');
})->name('manage.students');

// --------------------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
