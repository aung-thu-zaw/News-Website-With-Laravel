<div class="mb-4">
    <h5 class="text-center">Random News For You</h5>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"
                aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"
                aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner">

            @foreach ($randomNews as $randomPost)
            @if ($loop->iteration > 1)
            @break
            @endif
            <div class="carousel-item active" style="height: 300px">
                <div class="card bg-dark overflow-hidden text-white h-100">
                    <img src="{{ asset('storage/thumbnails/'.$randomPost->thumbnail) }}"
                        class="second-advertisement-img img-fluid" class="d-block w-100" alt="..."
                        style="width:100%; height: 100%; object-fit: cover; object-position: center">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning">
                                <a href="{{ route('news.show',$randomPost->slug) }}" class="text-white">{{
                                    $randomPost->title }}</a>
                            </h5>
                            <small class="text-warning">
                                {!! StringHelper::description($randomPost->body) !!}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @foreach ($randomNews as $randomPost)
            @if ($loop->iteration == 1)
            @continue
            @endif
            <div class="carousel-item" style="height: 300px">
                <div class="card bg-dark overflow-hidden text-white h-100">
                    <img src="{{ asset('storage/thumbnails/'.$randomPost->thumbnail) }}"
                        class="second-advertisement-img img-fluid" class="d-block w-100" alt="..."
                        style="width:100%; height: 100%; object-fit: cover; object-position: center">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning">
                                <a href="{{ route('news.show',$randomPost->slug) }}" class="text-white">{{
                                    $randomPost->title }}</a>
                            </h5>
                            <small class="text-warning">
                                {!! StringHelper::description($randomPost->body) !!}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
