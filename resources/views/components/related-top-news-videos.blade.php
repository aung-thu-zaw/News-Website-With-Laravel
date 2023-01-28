@props(["posts"])

@if ($posts->count())
<div class="my-5">
    <div class="my-3">
        <h3 class="border-bottom border-3 p-1">
            Top Related Video News
        </h3>
    </div>


    <div class="row g-3 my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($posts as $post)
                @if ($loop->iteration >1)
                @break
                @endif
                <div class="carousel-item active">
                    <div class="col-lg-6">
                        <div class="card">

                            <div class="card text-bg-dark" class="card-img-top">
                                <img src="http://img.youtube.com/vi/{{ $post->video_id }}/hqdefault.jpg"
                                    class="card-img img-fluid" alt="..."
                                    style="width: 100%; height: 100%; object-fit: cover">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <span class="fs-1" style="cursor: pointer">
                                        <a class="popup-youtube text-white"
                                            href="http://www.youtube.com/watch?v={{ $post->video_id }}">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="d-flex flex-column align-items-start">
                                    <h6 class="card-text">
                                        <a href="{{ route('video-news.show',$post->slug) }}" class="text-dark">
                                            {{ $post->title }}
                                        </a>
                                    </h6>

                                    <small class="card-text">
                                        {!! StringHelper::description($post->body,100) !!}
                                    </small>

                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news"
                                        class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                        $post->subCategory->name
                                        }}</a>

                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-user me-1"></i>
                                            <a href="#" class="text-dark">{{ $post->author->name }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news"
                                                class="text-dark">
                                                {{ DateTimeHelper::formatDate($post,"created_at") }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-upload me-1"></i>
                                            <span class="text-dark">{{ $post->created_at->diffForHumans() }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($posts as $post)
                @if ($loop->iteration ==1)
                @continue
                @endif
                <div class="carousel-item">
                    <div class="col-lg-6">
                        <div class="card">

                            <div class="card text-bg-dark" class="card-img-top">
                                <img src="http://img.youtube.com/vi/{{ $post->video_id }}/hqdefault.jpg"
                                    class="card-img img-fluid" alt="..."
                                    style="width: 100%; height: 100%; object-fit: cover">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <span class="fs-1" style="cursor: pointer">
                                        <a class="popup-youtube text-white"
                                            href="http://www.youtube.com/watch?v={{ $post->video_id }}">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="d-flex flex-column align-items-start">
                                    <h6 class="card-text">
                                        <a href="{{ route('video-news.show',$post->slug) }}" class="text-dark">
                                            {{ $post->title }}
                                        </a>
                                    </h6>

                                    <small class="card-text">
                                        {!! StringHelper::description($post->body,100) !!}
                                    </small>

                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news"
                                        class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                        $post->subCategory->name
                                        }}</a>

                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-user me-1"></i>
                                            <a href="#" class="text-dark">{{ $post->author->name }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news"
                                                class="text-dark">
                                                {{ DateTimeHelper::formatDate($post,"created_at") }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-upload me-1"></i>
                                            <span class="text-dark">{{ $post->created_at->diffForHumans() }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div> <a class="carousel-control-prev bg-transparent w-auto" href="#recipeCarousel" role="button"
                data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a>
            <a class="carousel-control-next bg-transparent w-auto" href="#recipeCarousel" role="button"
                data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
        </div>
    </div>


    {{-- <div class="mb-2">
        <div class="row g-3">
            @foreach ($posts as $post)
            <div class="col-lg-3 col-md-4">
                <div class="card" style="width: 18rem;">

                    <div class="card text-bg-dark" style="width: 100%; height: 200px" class="card-img-top">
                        <img src="http://img.youtube.com/vi/{{ $post->video_id }}/hqdefault.jpg"
                            class="card-img img-fluid" alt="..." style="width: 100%; height: 100%; object-fit: cover">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <span class="fs-1" style="cursor: pointer">
                                <a class="popup-youtube text-white"
                                    href="http://www.youtube.com/watch?v={{ $post->video_id }}">
                                    <i class="fa-regular fa-circle-play"></i>
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="d-flex flex-column align-items-start">
                            <h6 class="card-text">
                                <a href="{{ route('video-news.show',$post->slug) }}" class="text-dark">
                                    {{ $post->title }}
                                </a>
                            </h6>

                            <small class="card-text">
                                {!! StringHelper::description($post->body,100) !!}
                            </small>

                            <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news"
                                class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                $post->subCategory->name
                                }}</a>

                        </div>

                        <div class="icon-box-sm">
                            <span>
                                <i class="fa-solid fa-user me-1"></i>
                                <a href="#" class="text-dark">{{ $post->author->name }}</a>
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar-days me-1"></i>
                                <a href="#" class="text-dark">
                                    {{ DateTimeHelper::formatDate($post,"created_at") }}
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
</div>
@endif
