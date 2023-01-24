<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">



                <x-breadcrumbs :tag="$tag->name" />


                <div class="row g-3">
                    @foreach ($tag->newsPosts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card bg-dark overflow-hidden text-white border" style="height: 300px">
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt="" class="img-fluid"
                                style="width: 100%; height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="d-flex flex-column align-items-start">
                                    <h5 class="card-title">
                                        <a href="{{ route('news.show',$post->slug) }}" class="text-white">
                                            {{ $post->title }}
                                        </a>
                                    </h5>

                                    <p class="card-text description d-lg-none d-xl-block">
                                        {!! StringHelper::description($post->body,100) !!}
                                    </p>

                                    <a href="/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news"
                                        class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                        $post->subCategory->name
                                        }}</a>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box">
                                        <span>
                                            <i class="fa-solid fa-user me-1"></i>
                                            <a href="#" class="text-white">{{ $post->author->name }}</a>
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                DateTimeHelper::formatDay($post,'created_at') }}/news"
                                                class="text-white">
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

                    {{-- <div class="d-flex align-items-center justify-content-center">
                        {{ $tag->newsPosts->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
