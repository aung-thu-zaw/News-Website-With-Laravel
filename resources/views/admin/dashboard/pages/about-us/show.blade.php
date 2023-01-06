<x-dashboard-layout>
    @section("title", "About Us")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.about-us.update',$aboutUs->id) }}" method="POST" class="border p-5">
                @csrf
                @method("PATCH")

                <x-form.input type="text" name="title" value="{{ $aboutUs->title }}">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.textarea name="detail" value="{{ $aboutUs->detail }}">
                    <x-form.label name="Detail *" />
                </x-form.textarea>

                <x-form.edit-show-hide-select name="status" :status="$aboutUs->status">
                    <x-form.label name="Status *" />
                </x-form.edit-show-hide-select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
