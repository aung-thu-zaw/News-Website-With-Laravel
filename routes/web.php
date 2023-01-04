<?php

use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminHomeAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminSidebarAdvertisementController;
use App\Http\Controllers\Auth\SocialiteFacebookAuthController;
use App\Http\Controllers\Auth\SocialiteGitHubAuthController;
use App\Http\Controllers\Auth\SocialiteGoogleAuthController;
use App\Http\Controllers\News\AboutUsController;
use App\Http\Controllers\News\ContactUsController;
use App\Http\Controllers\News\FaqController;
use App\Http\Controllers\News\HomeNewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\TwoFactorController;
use App\Http\Controllers\Admin\Dashboard\Categories\AdminCategoryController;
use App\Http\Controllers\Admin\Dashboard\Categories\AdminSubCategoryController;
use App\Http\Controllers\Admin\Dashboard\Galleries\AdminPhotoGalleryController;
use App\Http\Controllers\Admin\Dashboard\Galleries\AdminVideoGalleryController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminNewsPostController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminTrendingVideosController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminVideoNewsPostController;
use App\Http\Controllers\Admin\Dashboard\TagController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\SubCategoryController;
use App\Http\Controllers\News\DateNewsController;
use App\Http\Controllers\Galleries\PhotoGalleryController;
use App\Http\Controllers\Galleries\VideoGalleryController;
use App\Http\Controllers\News\PopularNewsController;
use App\Http\Controllers\News\RecentNewsController;
use App\Http\Controllers\News\VideoNewsController;
use Illuminate\Support\Facades\Route;

# ============== User Authentication ==============
Route::prefix("/auth/redirect")
        ->name("redirect.")
        ->group(function () {
            Route::get('/facebook', [SocialiteFacebookAuthController::class,"redirectToProvider"])->name("facebook");
            Route::get('/google', [SocialiteGoogleAuthController::class,"redirectToProvider"])->name("google");
            Route::get('/github', [SocialiteGitHubAuthController::class,"redirectToProvider"])->name("github");
        });

Route::prefix("/auth/callback")
        ->group(function () {
            Route::get('/facebook', [SocialiteFacebookAuthController::class,"handelProviderCallback"]);
            Route::get('/google', [SocialiteGoogleAuthController::class,"handelProviderCallback"]);
            Route::get('/github', [SocialiteGitHubAuthController::class,"handelProviderCallback"]);
        });

Route::get('verify/resend', [TwoFactorController::class,"resend"])->name('verify.resend');

Route::resource("verify", TwoFactorController::class)->only(["index","store"]);

require __DIR__.'/auth.php';


# ============== User Profile ==============
Route::controller(ProfileController::class)
        ->middleware(['auth'])
        ->name("profile.")
        ->group(function () {
            Route::get('/profile', 'edit')->name('edit');
            Route::patch('/profile', 'update')->name('update');
            Route::delete('/profile', 'destroy')->name('destroy');
        });

# ============== News Page ==============

// News
Route::get('/', [HomeNewsController::class,"index"])->middleware(["twofactor"])->name("news.index");
Route::get('/news/{news_post:slug}', [HomeNewsController::class,"show"])->name("news.show");

Route::get('/video-news', [VideoNewsController::class,"index"])->name("video-news.index");
Route::get('/video-news/{video_news_post:slug}', [VideoNewsController::class,"show"])->name("video-news.show");

Route::get("/news/{year}/{month}/{day}", [DateNewsController::class,"show"])->name("date-news.show");

Route::get("/{category:slug}", [CategoryController::class,"show"])->name("category.show");

Route::get("/news/{category:slug}/{sub_category:slug}", [SubCategoryController::class,"show"])->name("sub-category.show");


Route::get("/about-us", [AboutUsController::class,"index"])->name("about-us.index");

Route::get("/faq", [FaqController::class,"index"])->name("faq.index");

Route::get("/contact-us", [ContactUsController::class,"index"])->name("contact-us.index");

// Popular News And Recent News
Route::get("/popular-news", [PopularNewsController::class,"index"])->name("popular-news.index");
Route::get("/recent-news", [RecentNewsController::class,"index"])->name("recent-news.index");

// Gallery
Route::get("/gallery/photos", [PhotoGalleryController::class,"index"])->name("photo-gallery.index");
Route::get("/gallery/videos", [VideoGalleryController::class,"index"])->name("video-gallery.index");



# ============== Admin Dashboard ==============
Route::middleware(["auth","admin"])
        ->prefix("admin")
        ->name("admin.")
        ->group(function () {
            Route::get('/dashboard', [AdminDashboardController::class,"index"])->name('dashboard');
            // Home Advertisement
            Route::get("/home-advertisement", [AdminHomeAdvertisementController::class,"show"])->name("home-advertisement.show");

            Route::patch("/home-advertisement/update", [AdminHomeAdvertisementController::class,"update"])->name("home-advertisement.update");
            // Sidebar Advertisement
            Route::get("/sidebar-advertisement", [AdminSidebarAdvertisementController::class,"show"])->name("sidebar-advertisement.show");

            Route::patch("/sidebar-advertisement/update", [AdminSidebarAdvertisementController::class,"update"])->name("sidebar-advertisement.update");
            // Setting
            Route::get('/setting', [AdminSettingController::class,"show"])->name('setting');

            Route::patch('/setting/update', [AdminSettingController::class,"update"])->name('setting.update');
            // Category
            Route::resource('/categories', AdminCategoryController::class);
            // SubCategory
            Route::resource('/sub-categories', AdminSubCategoryController::class);
            // News Post
            Route::resource('/news-posts', AdminNewsPostController::class);
            // Video News Post
            Route::resource('/video-news-posts', AdminVideoNewsPostController::class);
            // Trending Video
            Route::resource('/trending-videos', AdminTrendingVideosController::class);
            // Video Gallery
            Route::resource('/videos', AdminVideoGalleryController::class);
            // Photo Gallery
            Route::resource('/photos', AdminPhotoGalleryController::class);
        });

Route::delete('/admin/tags/{tag:id}', [TagController::class,"destroy"])->name("admin.tag.destroy");
