<x-dashboard-layout>
    @section("title", "Contact Us")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.contact-us.update',$contactUs->id) }}" method="POST" class="border p-5">
                @csrf
                @method("PATCH")

                <x-form.input type="text" name="title" value="{{ $contactUs->title }}">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.textarea name="detail" value="{{ $contactUs->detail }}">
                    <x-form.label name="Detail *" />
                </x-form.textarea>

                <x-form.input type="text" name="map" value="{{ $contactUs->map }}">
                    <x-form.label name="Map (Iframe Src Code)" />
                </x-form.input>

                <x-form.edit-show-hide-select name="status" :status="$contactUs->status">
                    <x-form.label name="Status *" />
                </x-form.edit-show-hide-select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
