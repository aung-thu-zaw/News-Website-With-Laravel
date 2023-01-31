@props(["relatednews"])

@if ($relatednews->count())
<div class="border border-2 mb-5">
    <div class="my-3">
        <h3 class="text-center border-bottom border-3 p-1">
            Releated News
        </h3>
    </div>
    <div class="mb-2">
        <ul class="list-group list-group-flush">
            @foreach ($relatednews as $post)
            <li class="list-group-item">
                <a href="{{ route('news.show',$post->slug) }}">{{ $post->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
