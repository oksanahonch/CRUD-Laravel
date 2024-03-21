<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () { return view('home.index');}) -> name('home'); 

//order/
Route::get('/order', [OrderController::class, 'index']) -> name('order.index');
Route::get('/order/create', [OrderController::class, 'create']) -> name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::patch('/order/{order}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/order/{order}', [OrderController::class, 'destroy'])->name('order.delete');


//client/
Route::get('/client', [ClientController::class, 'index']) -> name('client.index');
Route::get('/client/create', [ClientController::class, 'create']) -> name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::patch('/client/{client}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('client.delete');


//role/
Route::get('/role', [RoleController::class, 'index']) -> name('role.index');
Route::get('/role/create', [RoleController::class, 'create']) -> name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::patch('/role/{role}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{role}', [RoleController::class, 'destroy'])->name('role.delete');


//status/
Route::get('/status', [StatusController::class, 'index']) -> name('status.index');
Route::get('/status/create', [StatusController::class, 'create']) -> name('status.create');
Route::post('/status', [StatusController::class, 'store'])->name('status.store');
Route::get('/status/{status}/edit', [StatusController::class, 'edit'])->name('status.edit');
Route::patch('/status/{status}', [StatusController::class, 'update'])->name('status.update');
Route::delete('/status/{status}', [StatusController::class, 'destroy'])->name('status.delete');


//payment/
Route::get('/payment', [PaymentController::class, 'index']) -> name('payment.index');
Route::get('/payment/create', [PaymentController::class, 'create']) -> name('payment.create');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/payment/{payment}/edit', [PaymentController::class, 'edit'])->name('payment.edit');
Route::patch('/payment/{payment}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('/payment/{payment}', [PaymentController::class, 'destroy'])->name('payment.delete');


//city/
Route::get('/city', [CityController::class, 'index']) -> name('city.index');
Route::get('/city/create', [CityController::class, 'create']) -> name('city.create');
Route::post('/city', [CityController::class, 'store'])->name('city.store');
Route::get('/city/{city}/edit', [CityController::class, 'edit'])->name('city.edit');
Route::patch('/city/{city}', [CityController::class, 'update'])->name('city.update');
Route::delete('/city/{city}', [CityController::class, 'destroy'])->name('city.delete');


//department/
Route::get('/department', [DepartmentController::class, 'index']) -> name('department.index');
Route::get('/department/create', [DepartmentController::class, 'create']) -> name('department.create');
Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::patch('/department/{department}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}', [DepartmentController::class, 'destroy'])->name('department.delete');










