<div class="border shadow-sm p-3 mb-4">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular"
                type="button" role="tab" aria-controls="popular" aria-selected="true">Popular News</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button"
                role="tab" aria-controls="latest" aria-selected="false">Recent
                News</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">

            @foreach ($popularNews as $popularPost)
            <div class="card my-3 " style="width: 100%;">
                <div class="row g-0">
                    <div class="col-2 col-lg-4">
                        <img src="{{ asset('storage/thumbnails/'.$popularPost->thumbnail) }}" alt="..."
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-10 col-lg-8">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-start">
                                <h6 class="card-title">
                                    <a href="{{ route('news.show',$popularPost->slug) }}" class="text-dark">
                                        {{ $popularPost->title }}
                                    </a>
                                </h6>
                                <a href="/{{ $popularPost->subCategory->category->slug }}/{{ $popularPost->subCategory->slug }}/news"
                                    class="news-tag-sm text-white my-1 text-decoration-none">{{
                                    $popularPost->subCategory->name }}</a>
                            </div>
                            <div class="icon-box-sm">
                                <span>
                                    <i class="fa-solid fa-user me-1"></i>
                                    <a href="#" class="text-dark">{{ $popularPost->author->name }}</a>
                                </span>
                                <span>
                                    <i class="fa-solid fa-calendar-days me-1"></i>
                                    <a href="/{{ DateTimeHelper::formatYear($popularPost,'created_at') }}/{{
                                        DateTimeHelper::formatMonth($popularPost,'created_at') }}/{{
                                        DateTimeHelper::formatDay($popularPost,'created_at') }}/news"
                                        class="text-dark">
                                        {{ DateTimeHelper::formatDate($popularPost,"created_at") }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-grid">
                <a href="{{ route('popular-news.index') }}" class="btn btn-primary btn-sm text-decoration-none">
                    See All
                </a>
            </div>


        </div>
        <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">

            @foreach ($recentNews as $recentPost)
            <div class="card my-3 " style="width: 100%;">
                <div class="row g-0">
                    <div class="col-2 col-lg-4">
                        <img src="{{ asset('storage/thumbnails/'.$recentPost->thumbnail) }}"
                            class="img-fluid rounded-start" alt="..."
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-10 col-lg-8">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-start">
                                <h6 class="card-title">
                                    <a href="{{ route('news.show',$recentPost->slug) }}" class="text-dark">
                                        {{ $recentPost->title }}
                                    </a>
                                </h6>

                                <a href="/{{ $recentPost->subCategory->category->slug }}/{{ $recentPost->subCategory->slug }}/news"
                                    class="news-tag-sm text-white my-1  text-decoration-none">{{
                                    $recentPost->subCategory->name }}</a>
                            </div>
                            <div class="icon-box-sm">
                                <span>
                                    <i class="fa-solid fa-user me-1"></i>
                                    <a href="#" class="text-dark">{{ $recentPost->author->name }}</a>
                                </span>
                                <span>
                                    <i class="fa-solid fa-calendar-days me-1"></i>
                                    <a href="/{{ DateTimeHelper::formatYear($recentPost,'created_at') }}/{{
                                        DateTimeHelper::formatMonth($recentPost,'created_at') }}/{{
                                        DateTimeHelper::formatDay($recentPost,'created_at') }}/news" class="text-dark">
                                        {{ DateTimeHelper::formatDate($recentPost,"created_at") }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-grid">
                <a href="{{ route('recent-news.index') }}" class="btn btn-primary btn-sm text-decoration-none">
                    See All
                </a>
            </div>
        </div>
    </div>
</div>
