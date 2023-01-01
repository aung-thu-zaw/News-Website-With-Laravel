<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">

                <x-breadcrumbs videos="Videos" />

                <div class="row g-3">
                    @foreach ($videos as $video)
                    <div class="col-lg-3 col-md-4">
                        <div class="">
                            <div class="card text-bg-dark" style="width: 100%; height: 200px">
                                <img src="http://img.youtube.com/vi/{{ $video->video_id }}/mqdefault.jpg"
                                    class="card-img img-fluid" alt="..."
                                    style="width: 100%; height: 100%; object-fit: cover">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <span class="fs-1" style="cursor: pointer">
                                        <a class="popup-youtube text-white"
                                            href="http://www.youtube.com/watch?v={{ $video->video_id }}">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <small class="text-secondary">
                                {{$video->caption}}
                            </small>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
