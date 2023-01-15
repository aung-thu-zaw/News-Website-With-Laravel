<x-dashboard-layout>
    @section("title", "Category Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.categories.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="name" required="required">
                    <x-form.label name="Name *" />
                </x-form.input>

                <x-form.input type="text" name="slug" required="required">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.create-show-hide-select name="status">
                    <x-form.label name="Status *" />
                </x-form.create-show-hide-select>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
