@props(["post","socialshare"])

<div>
    <h2 class="text-center my-3">{{ $post->title }}</h2>
</div>
<div>
    <div class="text-secondary" style="font-size: .8rem;">
        By {{ $post->author->name }}, World News
    </div>
    <div class="text-secondary" style="font-size: .8rem;">
        Updated {{ DateTimeHelper::formatDateTime($post,"updated_at") }}
    </div>

</div>

<div class="my-3 w-100">
    <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
        style="width: 100%; height: 500px; object-fit: cover;">
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
            <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-title="Author">{{ $post->author->name }}</a>
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
