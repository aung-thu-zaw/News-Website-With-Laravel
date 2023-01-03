<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">

                <x-breadcrumbs videonews="Video News" />



                {{-- <div class="row">
                    <div class="col-lg-9">
                        <form action="" class="mt-3">
                            <div class="row g-2">
                                <div class="col-lg-10 my-2">
                                    <input type="text" class="form-control" placeholder="Search News...."
                                        aria-label="Last name">
                                </div>
                                <div class="col-lg-2 my-2 d-grid">
                                    <button class="btn btn-secondary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 d-flex align-items-center justify-content-center">
                        <select class="form-select" name="">
                            <option selected disabled>Sort By</option>
                            <option value="">Oldest</option>
                            <option value="">Newest</option>
                            <option value="">Title</option>
                        </select>
                    </div>
                </div> --}}




                <div class="row g-3">
                    @foreach ($newsVideoPosts as $post)
                    <div class="col-lg-3 col-md-4">
                        <div class="card" style="width: 18rem;">

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
                                    <a href="{{ route('video-news.show',$post->slug) }}">
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
                    @endforeach

                    <div class="d-flex align-items-center justify-content-center">
                        {{ $newsVideoPosts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
