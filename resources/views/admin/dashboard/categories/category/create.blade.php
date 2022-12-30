<x-dashboard-layout>
    @section("title", "Category Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.category.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.category.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="name">
                    <x-form.label name="Name" />
                </x-form.input>

                <x-form.input type="text" name="slug">
                    <x-form.label name="Slug" />
                </x-form.input>

                <x-form.create-show-hide-select name="status">
                    <x-form.label name="Status" />
                </x-form.create-show-hide-select>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
