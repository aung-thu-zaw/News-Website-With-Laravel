<x-dashboard-layout>
    @section("title", "Category Edit")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.category.update',$category->slug) }}" method="POST" class="border p-5">
                @csrf
                @method("PATCH")

                <x-form.input type="text" name="name" value="{{ $category->name }}">
                    <x-form.label name="Name" />
                </x-form.input>

                <x-form.input type="text" name="slug" value="{{ $category->slug }}">
                    <x-form.label name="Slug" />
                </x-form.input>

                <x-form.show-hide-select name="status" :category="$category->status">
                    <x-form.label name="Status" />
                </x-form.show-hide-select>

                <x-form.input-button name="Update" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
