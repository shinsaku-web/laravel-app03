<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController; // 追加するのを忘れない

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
//     return view('welcome');
// });

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
Route::get('/tasks/add', [TasksController::class, 'add'])->name('tasks.add');
Route::post('/tasks/add', [TasksController::class, 'store'])->name('tasks.store');
Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/edit/{id}', [TasksController::class, 'update'])->name('tasks.update');

Route::get('/about', function () {
    return view('about');
});
