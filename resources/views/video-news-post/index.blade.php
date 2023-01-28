<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">

                <x-breadcrumbs videonews="Video News" />

                <x-single-search-form />

                <div class="row g-3">
                    @forelse ($newsVideoPosts as $post)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <div class="card text-bg-dark" style="width: 100%; height: 200px" class="card-img-top">
                                <img src="http://img.youtube.com/vi/{{ $post->video_id }}/mqdefault.jpg"
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
                                <h6 class="card-text">
                                    <a href="{{ route('video-news.show',$post->slug) }}" class="text-dark">
                                        {{ $post->title }}
                                    </a>
                                </h6>

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
                    @empty
                    <p class="text-center text-danger">No Post Found</p>
                    @endforelse

                    <div class="d-flex align-items-center justify-content-center">
                        {{ $newsVideoPosts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
