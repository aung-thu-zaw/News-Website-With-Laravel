<div class="mb-4">
    <h5 class="text-center">{{ RANDOM_NEWS_FOR_YOU }}</h5>

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
                        <div class="d-flex flex-column align-items-start">
                            <h6 class="card-title">
                                <a href="{{ route('news.show',$randomPost->slug) }}" class="text-dark">
                                    {{ $randomPost->title }}
                                </a>
                            </h6>
                            <a href="/{{ $randomPost->subCategory->category->slug }}/{{ $randomPost->subCategory->slug }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}"
                                class="news-tag-sm text-white my-1 text-decoration-none">{{
                                $randomPost->subCategory->name
                                }}</a>
                        </div>
                        <div class="icon-box-sm">
                            <span>
                                <i class="fa-solid fa-user me-1"></i>
                                <a href="{{ route('author.details',['author'=>$randomPost->author->id,'type'=>'articles']) }}"
                                    class="text-dark">{{
                                    $randomPost->author->name
                                    }}</a>
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar-days me-1"></i>
                                <a href="/{{ DateTimeHelper::formatYear($randomPost,'created_at') }}/{{
                                    DateTimeHelper::formatMonth($randomPost,'created_at') }}/{{
                                    DateTimeHelper::formatDay($randomPost,'created_at') }}/news{{ request('type') && request('query') ? '&type='
                                .request('type') : '/?type=articles' }}" class="text-dark">
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
