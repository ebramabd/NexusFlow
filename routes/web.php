<?php

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\URL;
use Spatie\Permission\Models\Role;

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
//contempus_pass$$
Auth::routes(['verify' => true]);

Route::get('dashboard-login', [HomeController::class, 'index'])->name('home');

Route::get('/401', function () {
    abort(401);
});
Route::get('/500', function () {
    abort(500);
});

Route::get('/test', function () {
    $adminRole = Role::firstOrCreate(['name' => RoleEnum::ADMIN->value]);
    $adminRole->givePermissionTo(PermissionEnum::all());
});

Route::get('/', function () {
    return view('template.pages.home');
})->name('pages.home');
Route::get('/template/advantages', function () {
    return view('template.pages.advantages');
})->name('pages.advantages');
Route::get('/template/services', function () {
    return view('template.pages.services');
})->name('pages.services');
