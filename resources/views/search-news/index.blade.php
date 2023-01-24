<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">

                <x-search-news-section />

                <div class="row g-3">
                    @forelse ($newsPosts as $post)
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
                                        {{ StringHelper::description($post->body,100) }}
                                    </p>

                                    <a href="{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }}/news"
                                        class="header-news-tag-sm text-white my-1 text-decoration-none">{{
                                        $post->subCategory->name
                                        }}</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="icon-box-sm">
                                        <span>
                                            <i class="fa-solid fa-user me-1"></i>
                                            <a href="#" class="text-white">{{ $post->author->name }}</a>
                                        </span>
                                        <span class="">
                                            <i class="fa-solid fa-calendar-days me-1"></i>
                                            <a href="/{{ DateTimeHelper::formatYear($post,'created_at') }}/{{
                                                        DateTimeHelper::formatMonth($post,'created_at') }}/{{
                                                        DateTimeHelper::formatDay($post,'created_at') }}/news"
                                                class="text-white">
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
                    @empty
                    <p class="text-center text-danger">No Post Found!</p>
                    @endforelse

                    <div class="d-flex align-items-center justify-content-center">
                        {{ $newsPosts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
