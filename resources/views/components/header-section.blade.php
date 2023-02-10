@props(["posts"])

<header class="header">
    <div class="container py-3 my-4">

        <x-latest-news-ticker />

        <div class="row g-2">
            @foreach ($posts as $post)
            @if ($loop->iteration > 1)
            @break
            @endif
            <div class="col-lg-6 col-md-12">
                <div class="card bg-dark text-white overflow-hidden" style="height:550px ">
                    <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
                        style="height: 100%; object-fit: cover">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="d-flex flex-column align-items-start">
                            <h3 class="card-title">
                                <a href="{{ route('news.show',$post->slug) }}" class="text-white">

                                    {{ StringHelper::title($post->title) }}
                                </a>
                            </h3>
                            <p class="card-text">
                                {!! StringHelper::description($post->body) !!}
                            </p>
                            <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}"
                                class="header-news-tag text-white my-1 text-decoration-none">
                                {{ $post->subCategory->name}}
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="icon-box">
                                <span>
                                    <i class="fa-solid fa-user me-1"></i>
                                    <a href="{{ route('author.details',['author'=>$post->author->id,'type'=>'articles']) }}"
                                        class="text-white">{{
                                        $post->author->name
                                        }}</a>
                                </span>
                                <span>
                                    <i class="fa-solid fa-calendar-days me-1"></i>
                                    <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                        DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                        DateTimeHelper::formatDay($post,'created_at') }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}" class="text-white">
                                        {{ DateTimeHelper::formatDate($post,"created_at") }}
                                    </a>
                                </span>
                            </div>
                            <div>
                                <span class="update-text">
                                    <i class="fa-solid fa-upload me-1"></i>
                                    {{ $post->created_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-3 col-md-12">
                <div class="row g-2">
                    @foreach ($posts as $post)
                    @if ($loop->iteration == 1)
                    @continue
                    @endif

                    @if ($loop->iteration >3)
                    @break
                    @endif
                    <div class="col-12" style="height: 270px">
                        <div class="card bg-dark overflow-hidden text-white h-100">
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
                                style="height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column align-items-start">
                                    <h5 class="card-title">
                                        <a href="{{ route('news.show',$post->slug) }}" class="text-white">
                                            {{ StringHelper::title($post->title) }}
                                        </a>
                                    </h5>
                                    <p class="card-text description d-lg-none d-xl-block">
                                        {!! StringHelper::description($post->body,100) !!}
                                    </p>
                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news{{ request('type') ? '&type='
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
                                                class="text-white">{{
                                                $post->author->name
                                                }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}" class="text-white">
                                                {{ DateTimeHelper::formatDate($post,"created_at") }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-upload me-1"></i>
                                            <span class="text-white">{{ $post->created_at->diffForHumans() }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="row g-2">
                    @foreach ($posts as $post)
                    @if ($loop->iteration < 4) @continue @endif <div class="col-12" style="height: 270px">
                        <div class="card bg-dark overflow-hidden text-white h-100">
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
                                style="height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column align-items-start">
                                    <h5 class="card-title">
                                        <a href="{{ route('news.show',$post->slug) }}" class="text-white">
                                            {{ StringHelper::title($post->title) }}
                                        </a>
                                    </h5>
                                    <p class="card-text description d-lg-none d-xl-block">
                                        {{ StringHelper::description($post->body,100) }}
                                    </p>
                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news{{ request('type') ? '&type='
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
                                                class="text-white">{{
                                                $post->author->name
                                                }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}" class="text-white">
                                                {{ DateTimeHelper::formatDate($post,"created_at") }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-upload me-1"></i>
                                            <span class="text-white">{{ $post->created_at->diffForHumans() }}</span>
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
</header>