<x-dashboard-layout>
    @section("title", "News Video Post Edit")
    <div class="row">

        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.video-news-posts.index') }}" class="btn btn-primary text-decoration-none">View
                    <i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="border p-5">
                <form action="{{ route('admin.video-news-posts.update',$videoNewsPost->slug) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <input type="hidden" name="page" value="{{$page}}">

                    <x-form.input type="text" name="video_id" value="{{ $videoNewsPost->video_id }}">
                        <x-form.label name="Video Id *" />
                    </x-form.input>

                    <x-form.input type="text" name="title" value="{{ $videoNewsPost->title }}">
                        <x-form.label name="Title *" />
                    </x-form.input>

                    <x-form.input type="text" name="slug" value="{{ $videoNewsPost->slug }}">
                        <x-form.label name="Slug *" />
                    </x-form.input>

                    <x-form.textarea name="body" value="{{ $videoNewsPost->body }}">
                        <x-form.label name="Detail *" />
                    </x-form.textarea>

                    <x-form.input-wrapper>
                        <x-form.label name="Tags" />
                        <input type="text" name="tags" class="form-control" placeholder="tags" />
                        <x-form.error name="tags" />
                    </x-form.input-wrapper>


                    <x-form.input-button name="Update" />
                </form>


                @if($videoNewsPost->tags->count())
                <div class="mb-3">
                    <span class="mb-5">Exisiting Tags</span>
                    <div class="d-flex align-items-center">
                        @foreach ($videoNewsPost->tags as $tag)

                        <form action="/admin/video-news-post/{{ $videoNewsPost->slug }}/{{ $tag->slug }}" method="POST">
                            @csrf
                            <span class="header-news-tag text-white my-1 mx-1">
                                {{ $tag->name }}
                                <button type="submit" class="ms-3 fs-5 text-danger border-0"
                                    style="background: transparent"
                                    onclick="return confirm('Are you sure want to delete?');" style="cursor: pointer">
                                    x
                                </button>
                            </span>
                        </form>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</x-dashboard-layout>
