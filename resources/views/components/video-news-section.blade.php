@props(["posts"])
<section class="container my-2 py-3">
    <div class="border-top border-5 border-bottom border-secondary py-2">
        <h1 class="text-center">{{ VIDEO_NEWS_SECTION }}</h1>
    </div>

    <div class="row g-3 mt-3">
        <div class="col-lg-12">
            <div class="border border-secondary shadow-sm p-3 rounded-1">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h3>{{ LATEST_NEWS_VIDEOS }}</h3>
                    </div>
                    <div class="border d-md-none d-lg-block" style="width: 60%;"></div>
                    <div>
                        <a href="{{ route('video-news.index') }}"
                            class="btn btn-outline-primary text-decoration-none">{{ SHOW_ALL }}</a>
                    </div>
                </div>

                <div class="row g-3">
                    @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card">

                            <div class="card text-bg-dark" style="width: 100%; height: 200px" class="card-img-top">
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

                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news{{ request('type') && request('query') ? '&type='
                                        .request('type') : '/?type=articles' }}"
                                        class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                        $post->subCategory->name
                                        }}</a>

                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-user me-1"></i>

                                            <a href="{{ route('author.details',['author'=>$post->author->id,'type'=>'articles']) }}"
                                                class="text-dark">{{
                                                $post->author->name
                                                }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}" class="text-dark">
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
                    @endforeach
                </div>

            </div>
        </div>

    </div>

</section>