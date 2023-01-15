<x-dashboard-layout>
    @section("title", "SubCategory Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.sub-categories.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.sub-categories.update',$subCategory->slug) }}" method="POST"
                class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">

                <x-form.input type="text" name="name" value="{{ $subCategory->name }}">
                    <x-form.label name="SubCategory Name *" />
                </x-form.input>

                <x-form.input type="text" name="slug" value="{{ $subCategory->slug }}">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.edit-show-hide-select name="status_on_navbar" :subcategorynav="$subCategory->status_on_navbar">
                    <x-form.label name="Status (Show on Navbar) *" />
                </x-form.edit-show-hide-select>

                <x-form.edit-show-hide-select name="status_on_home" :subcategoryhome="$subCategory->status_on_home">
                    <x-form.label name="Status (Show on Home) *" />
                </x-form.edit-show-hide-select>

                <x-form.select name="category_id" :categories="$categories" :id="$subCategory->category->id">
                    <x-form.label name="Category *" />
                </x-form.select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
