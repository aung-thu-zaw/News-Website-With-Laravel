@props(["post","socialshare"])

<div>
    <div>
        <h2 class="text-center my-3">{{ $post->title }}</h2>
    </div>
    <div class="d-flex align-items-center">
        <div class="me-2">
            <img src="{{ asset('storage/avatars/'.$post->author->avatar) }}" class="rounded-circle" alt=""
                style="width:30px; height:30px; object-fit:cover; object-position: center">
        </div>
        <div>
            <div class="text-secondary" style="font-size: .8rem;">
                By <a href="{{ route('author.details',['author'=>$post->author->id,'type'=>'articles']) }}"
                    data-bs-toggle="tooltip" data-bs-title="Author">{{ $post->author->name
                    }}</a>, World News
            </div>

            <div class="text-secondary" style="font-size: .8rem;">
                Updated {{ DateTimeHelper::formatDateTime($post,"updated_at") }}
            </div>
        </div>
    </div>

    <div class="my-3 w-100">
        @if ($post->thumbnail)
        <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
            style="width: 100%; height: 500px; object-fit: cover;">
        @else
        <div class="card text-bg-dark" style="width: 100%;">
            <img src="http://img.youtube.com/vi/{{ $post->video_id }}/maxresdefault.jpg" class="card-img img-fluid"
                alt="..." style="width: 100%; height: 100%; object-fit: cover">
            <div class="card-img-overlay d-flex align-items-center justify-content-center">
                <span class="fs-1" style="cursor: pointer">
                    <a class="popup-youtube text-white" href="http://www.youtube.com/watch?v={{ $post->video_id }}">
                        <i class="fa-regular fa-circle-play"></i>
                    </a>
                </span>
            </div>
        </div>
        @endif
    </div>

    <div class="border-top border-bottom border-3 d-flex align-items-center justify-content-between my-3">
        <div class="w-25 d-flex align-items-center justify-content-around text-secondary">
            <span onclick="like()">
                <i class="fa-solid fa-thumbs-up me-2 like-icon"></i></i>
                20
            </span>
            <span onclick="dislike()">
                <i class="fa-solid fa-thumbs-down me-2 dislike-icon"></i></i>
                20
            </span>
            <span class="text-secondary"><i class="fa-solid fa-eye me-2"></i>{{ $post->visitors }}</span>
        </div>
        <div>
            <span class="text-secondary">
                <i class="fa-solid fa-user me-1"></i>
                <a href="{{ route('author.details',['author'=>$post->author->id,'type'=>'articles']) }}"
                    class="text-dark" data-bs-toggle="tooltip" data-bs-title="Author">{{
                    $post->author->name
                    }}</a>

            </span>
        </div>
        <div class="w-25 d-flex align-items-center justify-content-around">
            @foreach ($socialshare as $key=>$value)
            <a href="{{ $value }}" data-bs-toggle="tooltip" data-bs-title="Share with {{ ucfirst($key) }}"><i
                    class="fa-brands fa-{{ $key }}"></i></a>
            @endforeach
        </div>
    </div>

    <div>
        <span>
            {!! $post->body !!}
        </span>
    </div>
</div>
