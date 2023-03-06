<?php

use App\Http\Controllers\Admin\Dashboard\AdminSettingController;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\Dashboard\AdminLanguageController;
use App\Http\Controllers\Admin\Dashboard\AdminLiveVideoController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminHomeAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminSidebarAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\AuthorPosts\AdminAuthorNewsPostController;
use App\Http\Controllers\Admin\Dashboard\AuthorPosts\AdminAuthorVideoNewsPostController;
use App\Http\Controllers\Admin\Dashboard\Categories\AdminCategoryController;
use App\Http\Controllers\Admin\Dashboard\Categories\AdminSubCategoryController;
use App\Http\Controllers\Admin\Dashboard\Galleries\AdminPhotoGalleryController;
use App\Http\Controllers\Admin\Dashboard\Galleries\AdminVideoGalleryController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminAboutUsController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminContactUsController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminDisclaimerController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminFaqAccordionController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminFaqController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminPrivacyAndPolicyController;
use App\Http\Controllers\Admin\Dashboard\Pages\AdminTermsAndConditionsController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminNewsPostController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminTrendingVideosController;
use App\Http\Controllers\Admin\Dashboard\Posts\AdminVideoNewsPostController;
use App\Http\Controllers\Admin\Dashboard\Users\AdminNormalUserListController;
use App\Http\Controllers\Admin\Dashboard\Users\AdminPermissionUserListController;
use Illuminate\Support\Facades\Route;

# ============== Admin Dashboard ==============
Route::middleware(["auth","verified","can:admin"])
        ->prefix("admin")
        ->name("admin.")
        ->group(function () {
            Route::get('/dashboard', [AdminDashboardController::class,"index"])->name('dashboard');

            // Home Advertisement
            Route::get("/home-advertisement", [AdminHomeAdvertisementController::class,"edit"])->name("home-advertisement.edit");

            Route::patch("/home-advertisement/update", [AdminHomeAdvertisementController::class,"update"])->name("home-advertisement.update");

            // Sidebar Advertisement
            Route::get("/sidebar-advertisement", [AdminSidebarAdvertisementController::class,"edit"])->name("sidebar-advertisement.edit");

            Route::patch("/sidebar-advertisement/update", [AdminSidebarAdvertisementController::class,"update"])->name("sidebar-advertisement.update");

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

            // Photo Gallery
            Route::resource('/photo-gallery', AdminPhotoGalleryController::class);

            // Video Gallery
            Route::resource('/video-gallery', AdminVideoGalleryController::class);

            // Pages
            Route::get("about-us", [AdminAboutUsController::class,"edit"])->name("about-us.edit");

            Route::patch("/about-us/update", [AdminAboutUsController::class,"update"])->name("about-us.update");

            Route::get("contact-us", [AdminContactUsController::class,"edit"])->name("contact-us.edit");

            Route::patch("/contact-us/update", [AdminContactUsController::class,"update"])->name("contact-us.update");

            Route::get("disclaimer", [AdminDisclaimerController::class,"edit"])->name("disclaimer.edit");

            Route::patch("/disclaimer/update", [AdminDisclaimerController::class,"update"])->name("disclaimer.update");

            Route::get("faq", [AdminFaqController::class,"edit"])->name("faq.edit");

            Route::resource('/faq-accordion', AdminFaqAccordionController::class);

            Route::patch("/faq/update", [AdminFaqController::class,"update"])->name("faq.update");

            Route::get("privacy-and-policy", [AdminPrivacyAndPolicyController::class,"edit"])->name("privacy-and-policy.edit");

            Route::patch("/privacy-and-policy/update", [AdminPrivacyAndPolicyController::class,"update"])->name("privacy-and-policy.update");

            Route::get("terms-and-conditions", [AdminTermsAndConditionsController::class,"edit"])->name("terms-and-conditions.edit");

            Route::patch("/terms-and-conditions/update", [AdminTermsAndConditionsController::class,"update"])->name("terms-and-conditions.update");

            // Normal User List
            Route::get("normal-users", [AdminNormalUserListController::class,"index"])->name("noraml-user-lists.index");

            // Permission User Lists
            Route::resource('/permission-users', AdminPermissionUserListController::class);

            // Author Section
            Route::get("/author-news-posts", [AdminAuthorNewsPostController::class,"index"])->name("author-news-posts.index");

            Route::delete("/author-news-posts/{id}", [AdminAuthorNewsPostController::class,"destroy"])->name("author-news-posts.destroy");

            Route::get("/author-video-news-posts", [AdminAuthorVideoNewsPostController::class,"index"])->name("author-video-news-posts.index");

            Route::delete("/author-video-news-posts/{id}", [AdminAuthorVideoNewsPostController::class,"destroy"])->name("author-video-news-posts.destroy");

            // Live Video
            Route::resource('/live-videos', AdminLiveVideoController::class);

            // Setting
            Route::get('/setting', [AdminSettingController::class,"edit"])->name('setting.edit');

            Route::patch('/setting/update', [AdminSettingController::class,"update"])->name('setting.update');

            // Languages
            Route::resource('/languages', AdminLanguageController::class);

            Route::get("/language/update-detail/{language}", [AdminLanguageController::class,"handleUpdateDetail"])->name("update-detail.handle");

            Route::post("/language/update-detail/{language}/update", [AdminLanguageController::class,"updateDetailUpdate"])->name("update-detail.update");


            // Tag Handler
            Route::post('/news-post/{news_post:slug}/{tag:slug}', [TagPostController::class,"newsPostTagHandler"])->name("news-post-tag-handle");

            Route::post('/video-news-post/{video_news_post:slug}/{tag:slug}', [TagPostController::class,"videonewsPostTagHandler"])->name("video-news-post-tag-handle");
        });
