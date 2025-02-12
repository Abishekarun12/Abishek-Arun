<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BranchUserContoller;
use App\Http\Controllers\fController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if (Auth::guard('admin')->check()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/branch-login', [AuthenticatedSessionController::class, 'create'])->name('branch.login');
Route::post('/branch-login', [AuthenticatedSessionController::class, 'store'])->name('branch.store.login');

Route::middleware('auth','verified')->group(function () {
    Route::prefix('user')->group(
        function () {
            Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
        }
    );
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.list');
    Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/permission/update', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('/permission/delete/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');

    Route::get('/role', [RoleController::class, 'index'])->name('web_role.list');
    Route::get('/role/create', [RoleController::class, 'create'])->name('web_role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('web_role.store');
    Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('web_role.edit');
    Route::post('/role/update/{id}', [RoleController::class, 'update'])->name('web_role.update');
    Route::delete('/role/delete/{id}', [RoleController::class, 'destroy'])->name('web_role.destroy');


    Route::get('/article', [ArticleController::class, 'index'])->name('articles.list');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::post('/article/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});
Route::get('/session', function () {
    Session::flush();
    return "Session Cleared!";
    // return redirect()->route('admin.auth.logout');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
