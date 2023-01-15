<x-dashboard-layout>
    @section("title", "Live Video Edit")
    <div class="row">

        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.live-videos.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <div class="border p-5">
                <form action="{{ route('admin.live-videos.update',$liveVideo->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <input type="hidden" name="page" value="{{$page}}">

                    <x-form.input type="text" name="video_id" value="{{ $liveVideo->video_id }}" required="required">
                        <x-form.label name="Youtube Video Id *" />
                    </x-form.input>

                    <x-form.input type="text" name="title" value="{{ $liveVideo->title }}" required="required">
                        <x-form.label name="Title *" />
                    </x-form.input>

                    <x-form.input-button name="Update" />
                </form>
            </div>

        </div>
    </div>
</x-dashboard-layout>
