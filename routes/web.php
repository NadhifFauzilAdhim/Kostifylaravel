<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;


//Home Route
Route::get('/', [ListingController::class, 'index']);
Route::get('/developer', [ListingController::class, 'urltodev']);
Route::get('/detail/{post:slug}',[ListingController::class, 'detail']);
Route::get('/profile/{user:username}', [ProfileController::class,'profile']);

//Comment
Route::post('/detail/comments' ,[CommentController::class,'store'])->middleware('auth','verified');
Route::delete('/detail/comments/{comment}',[CommentController::class,'destroy'])->name('comments.detail.destroy')->middleware(['auth', 'verified']);
//Login Route
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']); 

//Register Route
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
//Email Verify
Route::get('/email/verify',[RegisterController::class,'verifyemail'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}',[RegisterController::class,'emailVerificationRequest'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification',[RegisterController::class,'verificationResend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//Reset Password
Route::get('/forgot-password',[LoginController::class,'passwordReset'])->middleware('guest')->name('password.request');
Route::post('/forgot-password',[LoginController::class,'resetRequest'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}',[LoginController::class,'resetToken'])->middleware('guest')->name('password.reset');
Route::post('/reset-password',[LoginController::class,'resetForm'])->middleware('guest')->name('password.update');
//Dashboard Route
Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/dashboard/overview',[DashboardController::class,'overview'])->middleware(['auth', 'verified']);
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('owner','verified');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('owner','verified');
Route::post('/dashboard/posts/comments' ,[CommentController::class,'store'])->middleware('owner','verified')->name('post.comment');
Route::delete('/dashboard/posts/comments/{comment}',[CommentController::class,'destroy'])->name('comments.destroy')->middleware(['auth', 'verified']);

