<div class="mb-5">
    <div class="my-3">
        <h5 class="border-bottom border-3 p-1">
            {{ TAGS }}
        </h5>
    </div>
    <div class="mb-2 d-flex align-items-center flex-wrap">
        @foreach ($tags as $tag)
        <a href="{{ route('tags.news-posts.show',['tag'=>$tag->slug,'type'=>'articles']) }}"
            class="tag text-white my-1 mx-1 text-decoration-none">{{
            $tag->name
            }}</a>
        @endforeach
    </div>
</div>
