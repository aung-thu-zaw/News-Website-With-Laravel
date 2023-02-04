<x-dashboard-layout>
    @section("title", "Language Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.languages.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.languages.update',$language->id) }}" method="POST"
                enctype="multipart/form-data" class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">
                <x-form.input type="text" name="name" value="{{ $language->name }}" required="required">
                    <x-form.label name="Name *" />
                </x-form.input>

                <x-form.input type="text" name="short_name" value="{{ $language->short_name }}" required="required">
                    <x-form.label name="Short Name *" />
                </x-form.input>


                <x-form.input-wrapper>
                    <x-form.label name="Default *" />
                    <select class="form-select" name="is_default" id="" required="required">
                        <option value="" selected disabled>Select</option>
                        <option value="yes" {{ $language->is_default == "yes" ? "selected" : "" }}>
                            Yes
                        </option>
                        <option value="no" {{ $language->is_default == "no" ? "selected" : "" }}>
                            No
                        </option>
                    </select>
                    <x-form.error name="is_default" />
                </x-form.input-wrapper>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
