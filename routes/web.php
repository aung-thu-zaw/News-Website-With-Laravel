<?php

use App\Http\Controllers\Admin\Dashboard\Advertisements\HomeAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\SidebarAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Auth\SocialiteFacebookAuthController;
use App\Http\Controllers\Auth\SocialiteGitHubAuthController;
use App\Http\Controllers\Auth\SocialiteGoogleAuthController;
use App\Http\Controllers\News\AboutUsController;
use App\Http\Controllers\News\ContactUsController;
use App\Http\Controllers\News\FaqController;
use App\Http\Controllers\News\HomeNewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\TwoFactorController;
use App\Http\Controllers\Admin\Dashboard\Categories\CategoryController;
use App\Http\Controllers\Admin\Dashboard\Categories\SubCategoryController;
use Illuminate\Support\Facades\Route;

# ============== User Authentication ==============
Route::prefix("/auth/redirect")->name("redirect.")->group(function () {
    Route::get('/facebook', [SocialiteFacebookAuthController::class,"redirectToProvider"])->name("facebook");
    Route::get('/google', [SocialiteGoogleAuthController::class,"redirectToProvider"])->name("google");
    Route::get('/github', [SocialiteGitHubAuthController::class,"redirectToProvider"])->name("github");
});

Route::prefix("/auth/callback")->group(function () {
    Route::get('/facebook', [SocialiteFacebookAuthController::class,"handelProviderCallback"]);
    Route::get('/google', [SocialiteGoogleAuthController::class,"handelProviderCallback"]);
    Route::get('/github', [SocialiteGitHubAuthController::class,"handelProviderCallback"]);
});

Route::get('verify/resend', [TwoFactorController::class,"resend"])->name('verify.resend');

Route::resource("verify", TwoFactorController::class)->only(["index","store"]);

require __DIR__.'/auth.php';


# ============== User Profile ==============
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


# ============== News Index Page ==============
Route::get('/', [HomeNewsController::class,"index"])->middleware(["twofactor"])->name("news.home");

Route::get('/news/{news_post:slug}', [HomeNewsController::class,"show"])->name("news.show");

Route::get("/about_us", [AboutUsController::class,"index"])->name("about_us");

Route::get("/faq", [FaqController::class,"index"])->name("faq");

Route::get("/contact_us", [ContactUsController::class,"index"])->name("contact_us");


# ============== News Details Page ==============


# ============== Admin Dashboard ==============
Route::get('admin/dashboard', [DashboardController::class,"index"])->middleware(['auth'])->name('admin.dashboard');

Route::get("admin/home_advertisement", [HomeAdvertisementController::class,"show"])->name("admin.home-advertisement");

Route::get("admin/sidebar_advertisement", [SidebarAdvertisementController::class,"show"])->name("admin.sidebar-advertisement");

Route::patch("admin/home_advertisement/update", [HomeAdvertisementController::class,"update"])->name("admin.home-advertisement.update");

Route::patch("admin/sidebar_advertisement/update", [SidebarAdvertisementController::class,"update"])->name("admin.sidebar-advertisement.update");



Route::get("admin/categories", [CategoryController::class,"index"])->name("admin.category");

Route::get("admin/categories/create", [CategoryController::class,"create"])->name("admin.category.create");

Route::post("admin/categories/store", [CategoryController::class,"store"])->name("admin.category.store");

Route::get("admin/categories/{category:slug}/edit", [CategoryController::class,"edit"])->name("admin.category.edit");

Route::patch("admin/categories/{category:slug}/update", [CategoryController::class,"update"])->name("admin.category.update");

Route::delete("admin/categories/{category:slug}/delete", [CategoryController::class,"destroy"])->name("admin.category.destroy");




Route::get("admin/sub_categories", [SubCategoryController::class,"index"])->name("admin.sub-category");

Route::get("admin/sub_categories/create", [SubCategoryController::class,"create"])->name("admin.sub-category.create");

Route::post("admin/sub_categories/store", [SubCategoryController::class,"store"])->name("admin.sub-category.store");

Route::get("admin/sub_categories/{sub_category:slug}/edit", [SubCategoryController::class,"edit"])->name("admin.sub-category.edit");

Route::patch("admin/sub_categories/{sub_category:slug}/update", [SubCategoryController::class,"update"])->name("admin.sub-category.update");

Route::delete("admin/sub_categories/{sub_category:slug}/delete", [SubCategoryController::class,"destroy"])->name("admin.sub-category.destroy");
