<x-dashboard-layout>
    @section("title", "Photo Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.photo-gallery.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.photo-gallery.update',$photoGallery->id) }}" method="POST"
                enctype="multipart/form-data" class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">

                <div class="mb-3 d-flex flex-column">
                    <span class="mb-3">Exisiting Photo</span>
                    <img src="{{ asset('storage/photo-gallery/'.$photoGallery->photo) }}" alt="" id="previewPhoto1"
                        class="img-fluid img-thumbnail" style="width:300px">
                </div>

                <x-form.input type="file" name="photo" id="file1" value="{{ $photoGallery->photo }}">
                    <x-form.label name="Photo *" />
                </x-form.input>

                <x-form.input type="text" name="owner" value="{{ $photoGallery->owner }}" required="required">
                    <x-form.label name="Owner *" />
                </x-form.input>

                <x-form.textarea name="caption" value="{{ $photoGallery->caption }}" required="required">
                    <x-form.label name="Caption *" />
                </x-form.textarea>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
