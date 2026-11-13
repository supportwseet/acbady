<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");



Route::middleware('guest')->group(function () {
    Route::get("/login", [loginController::class, 'index'])->name("login")->middleware('guest');
    Route::get("/register", [RegisterController::class, 'index'])->name("register")->middleware('guest');

    Route::get('/api/google-callback', [GoogleAuthController::class, 'callback'])
        ->name('google.callback');

    Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])
        ->name('google.redirect');

    Route::post("/login", [loginController::class, 'login'])->middleware('guest');
    Route::post("/register", [RegisterController::class, 'register'])->middleware('guest');
});


Route::middleware(['CheckStatus', 'auth'])->group(function () {
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'myProfile'])->name('profile');

    Route::get('/posts/create', [PostController::class, 'create'])
        ->middleware('auth')
        ->name('posts.create');

    Route::post('/posts', [PostController::class, 'store'])
        ->middleware('auth')
        ->name('posts.store');

    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
        ->middleware('auth')
        ->name('posts.edit');

    Route::put('/posts/{post}', [PostController::class, 'update'])
        ->middleware('auth')
        ->name('posts.update');

    Route::delete('/posts/{post}', [PostController::class, 'destroy'])
        ->middleware('auth')
        ->name('posts.destroy');

    Route::post('/posts/{post}/like', [PostController::class, 'like'])
        ->middleware('auth')
        ->name('posts.like');

    Route::post("/logout", [LogoutController::class, 'logout'])->name("logout");
});


Route::middleware("CheckStatus")->group(function () {
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/founders', [FounderController::class, 'index'])->name('founders');
    Route::get('/founders/{id}', [FounderController::class, 'show'])->name('founders.show');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
});


Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/users', [AdminController::class, 'index'])
            ->name('users.index');

        Route::put('/users/{user}/position', [AdminController::class, 'updatePosition'])
            ->name('users.position');

        Route::patch('/users/{user}/toggle-role', [AdminController::class, 'toggleRole'])
            ->name('users.toggle-role');

        Route::patch('/users/{user}/toggle-status', [AdminController::class, 'toggleStatus'])
            ->name('users.toggle-status');

        Route::patch('/users/{user}/toggle-founder', [AdminController::class, 'toggleFounder'])
            ->name('users.toggle-founder');
    });
