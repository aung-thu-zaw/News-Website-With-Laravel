<x-dashboard-layout>
    @section("title", "Sidebar Advertisement")

    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-8 p-5">
            <form action="{{ route('admin.sidebar-advertisement.update') }}" method="POST" enctype="multipart/form-data"
                class="border p-3 shadow-sm">
                @csrf
                @method("PATCH")
                <div class="row">
                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Top Advertisement</h3>

                            <x-form.input-wrapper>
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$sidebarAdvertisement->top_advertisement_photo") }}'
                                    alt="" class=" img-thumbnail img-fluid"
                                    style="height:400px; width:100%; object-fit:cover" id="previewPhoto1">
                            </x-form.input-wrapper>

                            <x-form.input type="file" name="top_advertisement_photo" id="file1">
                                <x-form.label name="Choose Ad Photo" />
                            </x-form.input>

                            <x-form.input type="text" name="top_advertisement_url"
                                value="{{ $sidebarAdvertisement->top_advertisement_url }}">
                                <x-form.label name="Url" />
                            </x-form.input>

                            <x-form.edit-show-hide-select name="top_advertisement_status"
                                :advertisement="$sidebarAdvertisement->top_advertisement_status">
                                <x-form.label name="Status" />
                            </x-form.edit-show-hide-select>

                        </div>
                    </div>

                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Bottom Advertisement</h3>

                            <x-form.input-wrapper>
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$sidebarAdvertisement->bottom_advertisement_photo") }}'
                                    alt="" class=" img-thumbnail img-fluid"
                                    style="height:400px; width:100%; object-fit:cover" id="previewPhoto2">
                            </x-form.input-wrapper>

                            <x-form.input type="file" name="bottom_advertisement_photo" id="file2">
                                <x-form.label name="Choose Ad Photo" />
                            </x-form.input>

                            <x-form.input type="text" name="bottom_advertisement_url"
                                value="{{ $sidebarAdvertisement->bottom_advertisement_url }}">
                                <x-form.label name="Url" />
                            </x-form.input>


                            <x-form.edit-show-hide-select name="bottom_advertisement_status"
                                :advertisement="$sidebarAdvertisement->bottom_advertisement_status">
                                <x-form.label name="Status" />
                            </x-form.edit-show-hide-select>
                        </div>
                    </div>
                </div>
                <x-form.input-button name="Save" />
            </form>
        </div>
    </div>
</x-dashboard-layout>
