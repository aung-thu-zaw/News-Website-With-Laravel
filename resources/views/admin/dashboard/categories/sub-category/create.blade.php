<x-dashboard-layout>
    @section("title", "SubCategory Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.sub-categories.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.sub-categories.store') }}" method="POST" class="border p-5">
                @csrf

                <x-form.input type="text" name="name">
                    <x-form.label name="SubCategory Name *" />
                </x-form.input>

                <x-form.input type="text" name="slug">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.create-show-hide-select name="status_on_navbar">
                    <x-form.label name="Status (Show on Navbar) *" />
                </x-form.create-show-hide-select>

                <x-form.create-show-hide-select name="status_on_home">
                    <x-form.label name="Status (Show on Home) *" />
                </x-form.create-show-hide-select>

                <x-form.select name="category_id" :categories="$categories">
                    <x-form.label name="Category *" />
                </x-form.select>

                <x-form.select name="language_id" required="required">
                    <x-form.label name="Language *" />
                </x-form.select>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>