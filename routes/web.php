<?php
use App\Http\Controllers\BACKEND\EmployeeController;
use App\Http\Controllers\BACKEND\CityController;
use App\Http\Controllers\BACKEND\CountryController;
use App\Http\Controllers\BACKEND\DepartmentController;
use App\Http\Controllers\BACKEND\StateController;
use App\Http\Controllers\BACKEND\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UtilisateurController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard/create/',[UtilisateurController::class,'index']);
Route::get('/dashboard/customer/',[CustomerController::class,'index'])->name('customer.index');
Route::POST('/dashboard/customer/add',[CustomerController::class,'store']);

Route::resource('user',UserController::class);
Route::resource('country',CountryController::class);
Route::resource('state',StateController::class);
Route::resource('city',CityController::class);
Route::resource('employees',EmployeeController::class);

// Route::post(['user/create', UserController::class,'index'])->name('user.index');
require __DIR__.'/auth.php';
