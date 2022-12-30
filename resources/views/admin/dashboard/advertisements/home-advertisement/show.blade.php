<x-dashboard-layout>
    @section("title", "Home Advertisement")
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-8 p-5">
            <form action="{{ route('admin.home-advertisement.update') }}" method="POST" enctype="multipart/form-data"
                class="border p-3 shadow-sm">
                @csrf
                @method("PATCH")
                <div class="row">
                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Top Advertisement</h3>
                            <x-form.input-wrapper>
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$homeAdvertisement->top_advertisement_photo") }}'
                                    class="img-fluid" alt="" style="height:150px; width:100%; object-fit:cover"
                                    id="previewPhoto1">
                            </x-form.input-wrapper>

                            <x-form.input type="file" name="top_advertisement_photo" id="file1">
                                <x-form.label name="Choose Ad Photo" />
                            </x-form.input>

                            <x-form.input type="text" name="top_advertisement_url"
                                value="{{ $homeAdvertisement->top_advertisement_url }}">
                                <x-form.label name="Url" />
                            </x-form.input>


                            <x-form.show-hide-select name="top_advertisement_status"
                                :advertisement="$homeAdvertisement->top_advertisement_status">
                                <x-form.label name="Status" />
                            </x-form.show-hide-select>

                        </div>
                    </div>
                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Middle Advertisement</h3>

                            <x-form.input-wrapper>
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$homeAdvertisement->middle_advertisement_photo") }}'
                                    class="img-fluid" alt="" style="height:150px; width:100%; object-fit:cover"
                                    id="previewPhoto2">
                            </x-form.input-wrapper>

                            <x-form.input type="file" name="middle_advertisement_photo" id="file2">
                                <x-form.label name="Choose Ad Photo" />
                            </x-form.input>

                            <x-form.input type="text" name="middle_advertisement_url"
                                value="{{ $homeAdvertisement->middle_advertisement_url }}">
                                <x-form.label name="Url" />
                            </x-form.input>


                            <x-form.show-hide-select name="middle_advertisement_status"
                                :advertisement="$homeAdvertisement->middle_advertisement_status">
                                <x-form.label name="Status" />
                            </x-form.show-hide-select>

                        </div>

                    </div>
                    <div class="col-12 p-3 my-3">
                        <div class="">
                            <h3 class="text-center mb-3">Bottom Advertisement</h3>

                            <x-form.input-wrapper>
                                <span class="mb-2">Advertisement Photo</span>
                                <img src='{{ asset("storage/advertisements/$homeAdvertisement->bottom_advertisement_photo") }}'
                                    class="img-fluid" alt="" style="height:150px; width:100%; object-fit:cover"
                                    id="previewPhoto3">
                            </x-form.input-wrapper>

                            <x-form.input type="file" name="bottom_advertisement_photo" id="file3">
                                <x-form.label name="Choose Ad Photo" />
                            </x-form.input>

                            <x-form.input type="text" name="bottom_advertisement_url"
                                value="{{ $homeAdvertisement->bottom_advertisement_url }}">
                                <x-form.label name="Url" />
                            </x-form.input>


                            <x-form.show-hide-select name="bottom_advertisement_status"
                                :advertisement="$homeAdvertisement->bottom_advertisement_status">
                                <x-form.label name="Status" />
                            </x-form.show-hide-select>

                        </div>
                    </div>
                </div>
                <x-form.input-button name="Save" />
            </form>
        </div>

    </div>
</x-dashboard-layout>
