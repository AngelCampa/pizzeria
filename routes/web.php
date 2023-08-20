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
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pizzas', PizzaController::class);
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::put('/pizzas/{pizza}', [PizzaController::class, 'update'])->name('pizzas.update');
Route::delete('/pizzas/{pizza}', [PizzaController::class, 'destroy'])->name('pizzas.destroy');
Route::get('/pizzas/{pizza}/edit', [PizzaController::class, 'edit'])->name('pizzas.edit');
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');