@props(["trendingvideos"])
<section class="container my-md-5">
    <div class="border-top border-5 border-bottom border-secondary py-2 mb-3">
        <h1 class="text-center">Trending Videos</h1>
    </div>

    <div class="row g-3">


        @foreach ($trendingvideos as $video)
        <div class="col-lg-3 col-md-4">
            <div class="">
                <div class="card text-bg-dark" style="width: 100%; height: 200px">
                    <img src="http://img.youtube.com/vi/{{ $video->video_id }}/mqdefault.jpg" class="card-img img-fluid"
                        alt="..." style="width: 100%; height: 100%; object-fit: cover">
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



</section>
