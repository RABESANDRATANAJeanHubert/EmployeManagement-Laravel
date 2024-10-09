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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('redirectIfAuthenticatedToDashboard');  // Apply the middleware to the welcome page

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/customer/',[CustomerController::class,'index'])->name('customer.index');
Route::POST('/dashboard/customer/add',[CustomerController::class,'store']);

Route::resource('user',UserController::class);
Route::resource('country',CountryController::class);
Route::resource('state',StateController::class);
Route::resource('city',CityController::class);
Route::resource('employees',EmployeeController::class);

// Auth routes
require __DIR__.'/auth.php';
