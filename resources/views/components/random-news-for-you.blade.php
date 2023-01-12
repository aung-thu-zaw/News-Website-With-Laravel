<div class="mb-4">
    <h5 class="text-center">Random News For You</h5>

    <div class="border shadow-sm p-3 mb-4">

        @foreach ($randomNews as $randomPost)
        <div class="card my-3 " style="width: 100%;">
            <div class="row g-0">
                <div class="col-2 col-lg-4">
                    <img src="{{ asset('storage/thumbnails/'.$randomPost->thumbnail) }}" alt="..."
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="col-10 col-lg-8">
                    <div class="card-body">
                        <h6 class="card-title">
                            <a href="{{ route('news.show',$randomPost->slug) }}" class="text-dark text-decoration-none">
                                {{ $randomPost->title }}
                            </a>
                        </h6>
                        <a href="/news/{{ $randomPost->subCategory->category->slug }}/{{ $randomPost->subCategory->slug }}"
                            class="news-tag-sm text-white my-1">{{ $randomPost->subCategory->name }}</a>
                        <div class="icon-box-sm">
                            <span>
                                <i class="fa-solid fa-user me-1"></i>
                                <a href="#" class="text-dark">{{ $randomPost->author->name }}</a>
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar-days me-1"></i>
                                <a href="/news/{{ DateTimeHelper::formatYear($randomPost,'created_at') }}/{{
                                    DateTimeHelper::formatMonth($randomPost,'created_at') }}/{{
                                    DateTimeHelper::formatDay($randomPost,'created_at') }}" class="text-dark">
                                    {{ DateTimeHelper::formatDate($randomPost,"created_at") }}
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
