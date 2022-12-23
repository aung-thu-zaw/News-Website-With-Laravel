<?php

use App\Http\Controllers\Admin\Dashboard\Advertisements\HomeAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\SidebarAdvertisementController;
use App\Http\Controllers\Auth\SocialiteFacebookAuthController;
use App\Http\Controllers\Auth\SocialiteGitHubAuthController;
use App\Http\Controllers\Auth\SocialiteGoogleAuthController;
use App\Http\Controllers\News\AboutUsController;
use App\Http\Controllers\News\ContactUsController;
use App\Http\Controllers\News\FaqController;
use App\Http\Controllers\News\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class,"index"])->name("home");

Route::get("/about_us", [AboutUsController::class,"index"])->name("about_us");

Route::get("/faq", [FaqController::class,"index"])->name("faq");

Route::get("/contact_us", [ContactUsController::class,"index"])->name("contact_us");



Route::get("/home_advertisement", [HomeAdvertisementController::class,"index"])->name("admin.home.advertisement");
Route::get("/sidebar_advertisement", [SidebarAdvertisementController::class,"index"])->name("admin.sidebar.advertisement");
Route::get("/home_advertisement/edit", [HomeAdvertisementController::class,"edit"])->name("admin.home.advertisement.edit");
Route::get("/sidebar_advertisement/edit", [SidebarAdvertisementController::class,"edit"])->name("admin.sidebar.advertisement.edit");







Route::get('/details', function () {
    return view("news.show");
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/auth/redirect/facebook', [SocialiteFacebookAuthController::class,"redirectToProvider"])->name("facebook.redirect");

Route::get('/auth/callback/facebook', [SocialiteFacebookAuthController::class,"handelProviderCallback"]);

Route::get('/auth/redirect/google', [SocialiteGoogleAuthController::class,"redirectToProvider"])->name("google.redirect");

Route::get('/auth/callback/google', [SocialiteGoogleAuthController::class,"handelProviderCallback"]);

Route::get('/auth/redirect/github', [SocialiteGitHubAuthController::class,"redirectToProvider"])->name("github.redirect");

Route::get('/auth/callback/github', [SocialiteGitHubAuthController::class,"handelProviderCallback"]);
