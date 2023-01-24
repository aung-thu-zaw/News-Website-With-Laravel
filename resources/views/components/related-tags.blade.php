@props(["post"])

@if ($post->tags()->count())
<div class="my-3">
    <div>
        <h5>Tags : </h5>
        <div class="d-flex align-items-center w-100">
            @foreach ($post->tags as $tag)

            <span>
                <a href="{{ $tag->slug }}" class="tag text-white me-1 text-decoration-none">{{ $tag->name }}</a>
            </span>

            @endforeach

        </div>
    </div>
</div>
@endif
