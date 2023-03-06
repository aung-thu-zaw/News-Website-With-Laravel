<?php

use App\Http\Controllers\Editor\Dashboard\Categories\EditorCategoryController;
use App\Http\Controllers\Editor\Dashboard\Categories\EditorSubCategoryController;
use App\Http\Controllers\Editor\Dashboard\EditorDashboardController;
use App\Http\Controllers\Editor\Dashboard\Galleries\EditorPhotoGalleryController;
use App\Http\Controllers\Editor\Dashboard\Galleries\EditorVideoGalleryController;
use App\Http\Controllers\Editor\Dashboard\Posts\EditorNewsPostController;
use App\Http\Controllers\Editor\Dashboard\Posts\EditorTrendingVideoController;
use App\Http\Controllers\Editor\Dashboard\Posts\EditorVideoNewsPostController;
use Illuminate\Support\Facades\Route;

# ============== Editor Dashboard ==============
Route::middleware(["auth","verified","can:editor"])
        ->prefix("editor")
        ->name("editor.")
        ->group(function () {
            Route::get('/dashboard', [EditorDashboardController::class,"index"])->name('dashboard');

            // Category
            Route::resource('/categories', EditorCategoryController::class);

            // SubCategory
            Route::resource('/sub-categories', EditorSubCategoryController::class);

            // News Post
            Route::resource('/news-posts', EditorNewsPostController::class);

            // Video News Post
            Route::resource('/video-news-posts', EditorVideoNewsPostController::class);

            // Trending Video
            Route::resource('/trending-videos', EditorTrendingVideoController::class);

            // Photo Gallery
            Route::resource('/photo-gallery', EditorPhotoGalleryController::class);

            // Video Gallery
            Route::resource('/video-gallery', EditorVideoGalleryController::class);

            // Tag Handler
            Route::post('/news-post/{news_post:slug}/{tag:slug}', [TagPostController::class,"newsPostTagHandler"])->name("news-post-tag-handle");

            Route::post('/video-news-post/{video_news_post:slug}/{tag:slug}', [TagPostController::class,"videonewsPostTagHandler"])->name("video-news-post-tag-handle");
        });
