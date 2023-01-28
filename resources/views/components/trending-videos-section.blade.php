@props(["trendingvideos"])
<section class="container my-md-5">
    <div class="border-top border-5 border-bottom border-secondary py-2 mb-3">
        <h1 class="text-center">Trending Videos</h1>
    </div>


    <div class="row mx-auto my-auto justify-content-center border py-5 shadow-sm rounded border-dark">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">

                @foreach ($trendingvideos as $video)
                @if ($loop->iteration >1)
                @break
                @endif
                <div class="carousel-item active">
                    <div class="col-md-3">

                        <div class="">

                            <div class="card text-bg-dark" style="width: 100%; height: 200px" class="card-img-top">
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

                            <div class="card-body">
                                <p class="text-secondary">{{ $video->caption }}</p>

                                <div class="icon-box-sm">
                                    <span class="text-secondary">
                                        <i class="fa-solid fa-user me-1"></i>
                                        {{ $video->owner }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

                @foreach ($trendingvideos as $video)
                @if ($loop->iteration ==1)
                @continue
                @endif
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="">

                            <div class="card text-bg-dark" style="width: 100%; height: 200px" class="card-img-top">
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

                            <div class="card-body">
                                <p class="text-secondary">{{ $video->caption }}</p>
                                <div class="icon-box-sm">
                                    <span class="text-secondary">
                                        <i class="fa-solid fa-user me-1"></i>
                                        {{ $video->owner }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div> <a class="carousel-control-prev bg-transparent w-auto" href="#recipeCarousel" role="button"
                data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a>
            <a class="carousel-control-next bg-transparent w-auto" href="#recipeCarousel" role="button"
                data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
        </div>
    </div>



</section>
