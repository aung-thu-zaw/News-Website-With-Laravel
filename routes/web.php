<?php

use App\Http\Controllers\Admin\Dashboard\AdminSettingController;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\Dashboard\AdminLiveVideoController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminHomeAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\Advertisements\AdminSidebarAdvertisementController;
use App\Http\Controllers\Admin\Dashboard\AuthorPosts\AdminAuthorNewsPostController;
use App\Http\Controllers\Admin\Dashboard\AuthorPosts\AdminAuthorVideoNewsPostController;
use App\Http\Controllers\Auth\SocialiteFacebookAuthController;
use App\Http\Controllers\Auth\SocialiteGitHubAuthController;
use App\Http\Controllers\Auth\SocialiteGoogleAuthController;
use App\Http\Controllers\News\HomeNewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\TwoFactorController;
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
use App\Http\Controllers\AuthorDetailController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\SubCategoryController;
use App\Http\Controllers\News\DateNewsController;
use App\Http\Controllers\Galleries\PhotoGalleryController;
use App\Http\Controllers\Galleries\VideoGalleryController;
use App\Http\Controllers\News\PopularNewsController;
use App\Http\Controllers\News\RecentNewsController;
use App\Http\Controllers\News\VideoNewsController;
use App\Http\Controllers\Pages\AboutUsController;
use App\Http\Controllers\Pages\ContactUsController;
use App\Http\Controllers\Pages\DisclaimerController;
use App\Http\Controllers\Pages\FaqController;
use App\Http\Controllers\Pages\PrivacyAndPolicyController;
use App\Http\Controllers\Pages\TermsAndConditionsController;
use App\Http\Controllers\Tags\TagPostController;
use App\Http\Controllers\Writer\Dashboard\Posts\WriterNewsPostController;
use App\Http\Controllers\Writer\Dashboard\Posts\WriterVideoNewsPostController;
use App\Http\Controllers\Writer\Dashboard\WriterDashboardController;
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


# ============== Main News ==============

// News
Route::get('/', [HomeNewsController::class,"index"])->middleware(["twofactor"])->name("news.index");
Route::get('/news/{news_post:slug}', [HomeNewsController::class,"show"])->name("news.show");


Route::post("/handle-date-format", [DateNewsController::class,"handleDateFormat"])->name("date-news.handle-date-format");

Route::get("/{year}/{month}/{day}/news", [DateNewsController::class,"show"])->name("date-news.show");

Route::get("/{category:slug}/news", [CategoryController::class,"show"])->name("category.news.show");

Route::get("/{category:slug}/{sub_category:slug}/news", [SubCategoryController::class,"show"])->name("sub-category.news.show");

// Video News
Route::get('/video-news', [VideoNewsController::class,"index"])->name("video-news.index");

Route::get('/video-news/{video_news_post:slug}', [VideoNewsController::class,"show"])->name("video-news.show");

// Popular News And Recent News
Route::get("/popular-news", [PopularNewsController::class,"index"])->name("popular-news.index");

Route::get("/recent-news", [RecentNewsController::class,"index"])->name("recent-news.index");

// Gallery
Route::get("/gallery/photos", [PhotoGalleryController::class,"index"])->name("photo-gallery.index");

Route::get("/gallery/videos", [VideoGalleryController::class,"index"])->name("video-gallery.index");

// Tags
Route::get("/tags/{tag:slug}", [TagPostController::class,"show"])->name("tags.news-posts.show");

// Authors
Route::get("/authors/{author}/details", [AuthorDetailController::class, "show"])->name("author.details");

// Pages
Route::get("/about-us", [AboutUsController::class,"index"])->name("about-us.index");

Route::get("/faq", [FaqController::class,"index"])->name("faq.index");

Route::get("/contact-us", [ContactUsController::class,"index"])->name("contact-us.index");

Route::post("/contact-us/send-email", [ContactUsController::class,"sendEmail"])->name("contact-us.send-email");

Route::get("/terms-and-conditions", [TermsAndConditionsController::class,"index"])->name("terms-and-conditions.index");

Route::get("/privacy-and-policy", [PrivacyAndPolicyController::class,"index"])->name("privacy-and-policy.index");

Route::get("/disclaimer", [DisclaimerController::class,"index"])->name("disclaimer.index");


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

            // Tag Handler
            Route::post('/news-post/{news_post:slug}/{tag:slug}', [TagPostController::class,"newsPostTagHandler"])->name("news-post-tag-handle");

            Route::post('/video-news-post/{video_news_post:slug}/{tag:slug}', [TagPostController::class,"videonewsPostTagHandler"])->name("video-news-post-tag-handle");
        });


# ============== Writer Dashboard ==============
Route::middleware(["auth","verified","can:writer"])
        ->prefix("writer")
        ->name("writer.")
        ->group(function () {
            Route::get('/dashboard', [WriterDashboardController::class,"index"])->name('dashboard');

            // News Post
            Route::resource('/news-posts', WriterNewsPostController::class);

            // Video News Post
            Route::resource('/video-news-posts', WriterVideoNewsPostController::class);

            // Tag Handler
            Route::post('/news-post/{news_post:slug}/{tag:slug}', [TagPostController::class,"newsPostTagHandler"])->name("news-post-tag-handle");

            Route::post('/video-news-post/{video_news_post:slug}/{tag:slug}', [TagPostController::class,"videonewsPostTagHandler"])->name("video-news-post-tag-handle");
        });
