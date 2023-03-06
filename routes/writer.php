<?php

use App\Http\Controllers\Writer\Dashboard\Posts\WriterNewsPostController;
use App\Http\Controllers\Writer\Dashboard\Posts\WriterVideoNewsPostController;
use App\Http\Controllers\Writer\Dashboard\WriterDashboardController;
use Illuminate\Support\Facades\Route;

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
