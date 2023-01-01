<x-dashboard-layout>
    @section("title", "Video Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.video-gallery.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.video-gallery.update',$video->id) }}" method="POST"
                enctype="multipart/form-data" class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">

                <x-form.input type="text" name="video_id" value="{{ $video->video_id }}">
                    <x-form.label name="Video Id *" />
                </x-form.input>

                <x-form.input type="text" name="owner" value="{{ $video->owner }}">
                    <x-form.label name="Owner *" />
                </x-form.input>

                <x-form.textarea name="caption" value="{{ $video->caption }}">
                    <x-form.label name="Caption *" />
                </x-form.textarea>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
