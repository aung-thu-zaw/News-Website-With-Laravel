@props(["subcategories"])
<section class="container mt-3 py-3">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="row">
                @foreach ($subcategories as $subcategory)
                @if ($subcategory->status_on_home==="show")
                <div class="col-12">
                    <div class="row g-2">

                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5>
                                    {{ $subcategory->name }}
                                </h5>
                            </div>
                            <span class="border d-none d-lg-block w-75">
                            </span>
                            <div>
                                <a href="#" class="btn btn-primary">See all</a>
                            </div>
                        </div>

                        @forelse ($subcategory->newsPosts as $post)
                        @if ($loop->iteration > 1)
                        @break
                        @endif

                        <div class="col-lg-6">
                            <div class="card my-3" style="width: 100%;">
                                <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt="..."
                                    class="img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ route('news.show',$post->slug) }}" class="text-dark">
                                            {{ $post->title}}
                                        </a>
                                    </h5>
                                    <small class="card-text">
                                        {!! StringHelper::description($post->body) !!}
                                    </small>
                                    <a href="#" class="header-news-tag-sm text-white my-1">
                                        {{ $post->subCategory->name }}
                                    </a>
                                    <div class="d-flex align-items-center justify-content-between">
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
                                        <div>
                                            <span class="update-text">
                                                {{ $post->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <p class="text-center text-danger">No post found for this topic section.</p>
                        @endforelse


                        <div class="col-lg-6">
                            @foreach ($subcategory->newsPosts as $post)
                            @if ($loop->iteration ==1)
                            @continue
                            @endif
                            @if ($loop->iteration > 5)
                            @break
                            @endif
                            <div class="card my-3 " style="width: 100%;">
                                <div class="row g-0">
                                    <div class="col-2 col-lg-4">
                                        <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt="..."
                                            style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid">
                                    </div>
                                    <div class="col-10 col-lg-8">
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                {{ StringHelper::title($post->title) }}
                                            </h6>
                                            <a href="#" class="news-tag-sm text-white my-1">{{
                                                $post->subCategory->name
                                                }}</a>
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
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <x-home-sidebar-section />

    </div>
</section>
