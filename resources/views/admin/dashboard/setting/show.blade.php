<x-dashboard-layout>
    @section("title", "Setting")
    <div class="row">

        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
            </div>
            <div class="border p-5">
                <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")


                    <div class="mb-3">
                        <img src="{{ asset('storage/website/'.$setting->favicon) }}" alt="" id="previewPhoto1"
                            class="img-thumbnail" style="width: 300px">
                    </div>

                    <x-form.input type="file" name="favicon" id="file1">
                        <x-form.label name="Choose favicon *" />
                    </x-form.input>


                    <div class="mb-3">
                        <img src="{{ asset('storage/website/'.$setting->logo) }}" alt="" id="previewPhoto2"
                            class="img-thumbnail" style="width: 300px">
                    </div>

                    <x-form.input type="file" name="logo" id="file2">
                        <x-form.label name="Choose logo *" />
                    </x-form.input>



                    <x-form.input-button name="Save" />
                </form>
            </div>

        </div>
    </div>
</x-dashboard-layout>
