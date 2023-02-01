<x-dashboard-layout>
    @section("title", "News Post Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('editor.news-posts.index') }}" class="btn btn-primary text-decoration-none">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('editor.news-posts.store') }}" method="POST" enctype="multipart/form-data"
                class="border p-5">
                @csrf

                <x-form.input type="text" name="title" required="required">
                    <x-form.label name="Title *" />
                </x-form.input>

                <x-form.input type="text" name="slug" required="required">
                    <x-form.label name="Slug *" />
                </x-form.input>

                <x-form.textarea name="body" required="required">
                    <x-form.label name="Detail *" />
                </x-form.textarea>

                <x-form.select name="sub_category_id" :subcategories="$subCategories" required="required">
                    <x-form.label name="SubCategory *" />
                </x-form.select>

                <x-form.input-wrapper>
                    <x-form.label name="Tags" />
                    <input type="text" name="tags" class="form-control" placeholder="tags" />
                    <x-form.error name="tags" />
                </x-form.input-wrapper>

                <x-form.input type="file" name="thumbnail" id="file1">
                    <x-form.label name="Choose Post Photo" />
                </x-form.input>

                <div class="mb-3">
                    <img src="" alt="" id="previewPhoto1" style="width: 400px" class="img-fluid img-thumbnail">
                </div>

                <x-form.input-button name="Create" />

            </form>
        </div>
    </div>
</x-dashboard-layout>
