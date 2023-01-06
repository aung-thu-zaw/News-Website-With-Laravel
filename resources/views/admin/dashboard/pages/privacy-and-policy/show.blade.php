<x-dashboard-layout>
    @section("title", "FAQ")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.privacy-and-policy.update',$privacyAndPolicy->id) }}" method="POST"
                class="border p-5">
                @csrf
                @method("PATCH")

                <x-form.input type="text" name="title" value="{{ $privacyAndPolicy->title }}">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.textarea name="detail" value="{{ $privacyAndPolicy->detail }}">
                    <x-form.label name="Detail *" />
                </x-form.textarea>

                <x-form.edit-show-hide-select name="status" :status="$privacyAndPolicy->status">
                    <x-form.label name="Status *" />
                </x-form.edit-show-hide-select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
