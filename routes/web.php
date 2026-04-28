<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('blog.home');
Route::get('/archive', [PublicController::class, 'archive'])->name('blog.archive');
Route::get('/about', [PublicController::class, 'about'])->name('blog.about');
Route::get('/contact', [PublicController::class, 'contact'])->name('blog.contact');
Route::get('/newsletter', [PublicController::class, 'newsletterLandingPage'])->name('blog.newsletter-landing-page');
Route::get('/privacy-policy', [PublicController::class, 'privacyPolicy'])->name('blog.privacy-policy');
Route::get('/terms-of-service', [PublicController::class, 'termsOfService'])->name('blog.terms-of-service');
// Route::get('/{slug}', [PublicController::class, 'singleArchive'])->name('blog.singleArchive');

