<x-dashboard-layout>
    @section("title", "News Video Post Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.post.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.post.video.store') }}" method="POST" enctype="multipart/form-data"
                class="border p-5">
                @csrf

                <x-form.input type="text" name="video_id">
                    <x-form.label name="Video Id *" />
                </x-form.input>

                <x-form.input type="text" name="title">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.input type="text" name="slug">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.textarea name="body">
                    <x-form.label name="Detail *" />
                </x-form.textarea>

                <x-form.input-wrapper>
                    <x-form.label name="Tags" />
                    <input type="text" name="tags" class="form-control" placeholder="tags" />
                    <x-form.error name="tags" />
                </x-form.input-wrapper>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
