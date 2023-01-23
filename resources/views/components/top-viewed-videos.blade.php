@props(["topvideos"])
<div class="border border-2 mb-5">
    <div class="my-3">
        <h3 class="text-center border-bottom border-3 p-1">
            Top 10 Viewed Video News
        </h3>
    </div>
    <div class="mb-2">
        <ul class="list-group list-group-flush">

            @foreach ($topvideos as $video)
            <li class="list-group-item">
                <a href="{{ route('video-news.show',$video->slug) }}">{{ $video->title }}</a>
            </li>
            @endforeach


        </ul>
    </div>
</div>
