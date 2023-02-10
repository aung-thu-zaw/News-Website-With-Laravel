<x-dashboard-layout>

    @section("title", "Trending Video Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.trending-videos.index') }}" class="btn btn-primary text-decoration-none">View
                    <i class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.trending-videos.update',$trendingVideo->id) }}" method="POST"
                enctype="multipart/form-data" class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">

                <x-form.input type="text" name="video_id" value="{{ $trendingVideo->video_id }}" required="required">
                    <x-form.label name="Video Id *" />
                </x-form.input>

                <x-form.input type="text" name="owner" value="{{ $trendingVideo->owner }}" required="required">
                    <x-form.label name="Owner *" />
                </x-form.input>

                <x-form.textarea name="caption" value="{{ $trendingVideo->caption }}" required="required">
                    <x-form.label name="Caption *" />
                </x-form.textarea>

                <x-form.select name="language_id" :id="$trendingVideo->language_id" required="required">
                    <x-form.label name="Language *" />
                </x-form.select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>