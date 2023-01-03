<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">




                <x-breadcrumbs :date="$newsPosts[0]" />



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
                    @foreach ($newsPosts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card bg-dark overflow-hidden text-white border" style="height: 300px">
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt="" class="img-fluid"
                                style="width: 100%; height: 100%; object-fit: cover">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">

                                <h5 class="card-title">
                                    <a href="{{ route('news.show',$post->slug) }}"
                                        class="text-white text-decoration-none">
                                        {{ $post->title }}
                                    </a>
                                </h5>

                                <p class="card-text description d-lg-none d-xl-block">
                                    {{ StringHelper::description($post->body,100) }}
                                </p>

                                <a href="#" class="header-news-tag-sm text-white my-1">{{ $post->subCategory->name
                                    }}</a>
                                <div class="icon-box-sm">
                                    <span>
                                        <i class="fa-solid fa-user me-1"></i>
                                        <a href="#" class="text-white">Aung Thu Zaw</a>
                                    </span>
                                    <span>
                                        <i class="fa-solid fa-calendar-days me-1"></i>
                                        <a href="#" class="text-white">
                                            {{ DateTimeHelper::formatDate($post,"created_at") }}
                                        </a>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="d-flex align-items-center justify-content-center">
                        {{ $newsPosts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
