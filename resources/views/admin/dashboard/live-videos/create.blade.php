<x-dashboard-layout>
    @section("title", "Live Video Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.live-videos.index') }}" class="btn btn-primary text-decoration-none">
                    View
                    <i class="fa-solid fa-eye"></i>
                </a>
            </div>
            <form action="{{ route('admin.live-videos.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="video_id" required="required">
                    <x-form.label name="Youtube Video Id *" />
                </x-form.input>

                <x-form.input type="text" name="title" required="required">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.select name="language_id" required="required">
                    <x-form.label name="Language *" />
                </x-form.select>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
