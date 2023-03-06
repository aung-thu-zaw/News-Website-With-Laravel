<?php


use App\Http\Controllers\Auth\SocialiteFacebookAuthController;
use App\Http\Controllers\Auth\SocialiteGitHubAuthController;
use App\Http\Controllers\Auth\SocialiteGoogleAuthController;
use App\Http\Controllers\News\HomeNewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\TwoFactorController;
use App\Http\Controllers\AuthorDetailController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\SubCategoryController;
use App\Http\Controllers\News\DateNewsController;
use App\Http\Controllers\Galleries\PhotoGalleryController;
use App\Http\Controllers\Galleries\VideoGalleryController;
use App\Http\Controllers\LanguageController;
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

// Language
Route::post("/language/switch", [LanguageController::class,"handleLanguage"])->name("language.handle");




require __DIR__.'/admin.php';
require __DIR__.'/editor.php';
require __DIR__.'/writer.php';
