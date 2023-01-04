<x-dashboard-layout>
    @section("title", "Trending Video Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.trending-videos.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.trending-videos.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="video_id">
                    <x-form.label name="Video Id *" />
                </x-form.input>

                <x-form.input type="text" name="owner">
                    <x-form.label name="Owner *" />
                </x-form.input>

                <x-form.textarea name="caption">
                    <x-form.label name="Caption *" />
                </x-form.textarea>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
