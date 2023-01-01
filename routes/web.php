<?php

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
use App\Http\Controllers\Admin\Dashboard\TagController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\SubCategoryController;
use App\Http\Controllers\Galleries\PhotoGalleryController;
use App\Http\Controllers\Galleries\VideoGalleryController;
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
Route::controller(ProfileController::class)->middleware(['auth'])->name("profile.")->group(function () {
    Route::get('/profile', 'edit')->name('edit');
    Route::patch('/profile', 'update')->name('update');
    Route::delete('/profile', 'destroy')->name('destroy');
});


# ============== News Home Page ==============
Route::get('/', [HomeNewsController::class,"index"])->middleware(["twofactor"])->name("news.home");

Route::get('/news/{news_post:slug}', [HomeNewsController::class,"show"])->name("news.show");

Route::get("/about_us", [AboutUsController::class,"index"])->name("about-us");

Route::get("/faq", [FaqController::class,"index"])->name("faq");

Route::get("/contact_us", [ContactUsController::class,"index"])->name("contact-us");

Route::get("/news/{category:slug}/{sub_category:slug}", [SubCategoryController::class,"show"])->name("sub-category.show");

Route::get("/{category:slug}", [CategoryController::class,"show"])->name("category.show");

Route::get("/gallery/photos", [PhotoGalleryController::class,"index"])->name("photo-gallery.index");

Route::get("/gallery/videos", [VideoGalleryController::class,"index"])->name("video-gallery.index");


# ============== Admin Dashboard ==============
Route::middleware(["auth","admin"])->prefix("admin")->name("admin.")->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class,"index"])->name('dashboard');

    Route::get("/home_advertisement", [AdminHomeAdvertisementController::class,"show"])->name("home-advertisement");

    Route::get("/sidebar_advertisement", [AdminSidebarAdvertisementController::class,"show"])->name("sidebar-advertisement");

    Route::patch("/home_advertisement/update", [AdminHomeAdvertisementController::class,"update"])->name("home-advertisement.update");

    Route::patch("/sidebar_advertisement/update", [AdminSidebarAdvertisementController::class,"update"])->name("sidebar-advertisement.update");
});

Route::controller(AdminCategoryController::class)->middleware(["auth","admin"])->prefix("admin/categories")->name("admin.category.")->group(function () {
    Route::get("/", "index")->name("index");

    Route::get("/create", "create")->name("create");

    Route::post("/store", "store")->name("store");

    Route::get("/{category:slug}/edit", "edit")->name("edit");

    Route::patch("/{category:slug}/update", "update")->name("update");

    Route::delete("/{category:slug}/delete", "destroy")->name("destroy");
});

Route::controller(AdminSubCategoryController::class)->middleware(["auth","admin"])->prefix("admin/sub_categories")->name("admin.sub-category.")->group(function () {
    Route::get("/", "index")->name("index");

    Route::get("/create", "create")->name("create");

    Route::post("/store", "store")->name("store");

    Route::get("/{sub_category:slug}/edit", "edit")->name("edit");

    Route::patch("/{sub_category:slug}/update", "update")->name("update");

    Route::delete("/{sub_category:slug}/delete", "destroy")->name("destroy");
});

Route::controller(AdminNewsPostController::class)->middleware(["auth","admin"])->prefix("admin/posts")->name("admin.post.")->group(function () {
    Route::get("/", "index")->name("index");

    Route::get("/create", "create")->name("create");

    Route::post("/store", "store")->name("store");

    Route::get("/{news_post:slug}/edit", "edit")->name("edit");

    Route::patch("/{news_post:slug}/update", "update")->name("update");

    Route::delete("/{news_post:slug}/delete", "destroy")->name("destroy");
});

Route::delete('/admin/tags/{tag:id}', [TagController::class,"destroy"])->name("tag.destroy");

Route::controller(AdminPhotoGalleryController::class)->middleware(["auth","admin"])->prefix("admin/photos")->name("admin.photo-gallery.")->group(function () {
    Route::get("/", "index")->name("index");

    Route::get("/create", "create")->name("create");

    Route::post("/store", "store")->name("store");

    Route::get("/{photo:id}/edit", "edit")->name("edit");

    Route::patch("/{photo:id}/update", "update")->name("update");

    Route::delete("/{photo:id}/delete", "destroy")->name("destroy");
});

Route::controller(AdminVideoGalleryController::class)->middleware(["auth","admin"])->prefix("admin/videos")->name("admin.video-gallery.")->group(function () {
    Route::get("/", "index")->name("index");

    Route::get("/create", "create")->name("create");

    Route::post("/store", "store")->name("store");

    Route::get("/{video:id}/edit", "edit")->name("edit");

    Route::patch("/{video:id}/update", "update")->name("update");

    Route::delete("/{video:id}/delete", "destroy")->name("destroy");
});

// Route::view('/photo-gallery', 'galleries.photo');
