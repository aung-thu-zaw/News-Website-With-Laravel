<x-dashboard-layout>
    @section("title", "Category Edit")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.categories.update',$category->slug) }}" method="POST" class="border p-5">
                @csrf
                @method("PATCH")
                <input type="hidden" name="page" value="{{$page}}">

                <x-form.input type="text" name="name" value="{{ $category->name }}" required="required">
                    <x-form.label name="Name *" />
                </x-form.input>

                <x-form.input type="text" name="slug" value="{{ $category->slug }}" required="required">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.edit-show-hide-select name="status" :category="$category->status" required="required">
                    <x-form.label name="Status *" />
                </x-form.edit-show-hide-select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
