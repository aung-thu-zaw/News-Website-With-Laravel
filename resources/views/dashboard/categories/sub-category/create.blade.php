<x-dashboard-layout>
    @section("title", "SubCategory Create")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.sub-category.store') }}" method="POST" class="border p-5">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">SubCategory Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status (Show on Navbar)</label>
                    <select class="form-select" name="status_on_navbar" id="">
                        <option value="" selected disabled>Select one</option>
                        <option value="show">Show</option>
                        <option value="hide">Hide</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status (Show on Home)</label>
                    <select class="form-select" name="status_on_home" id="">
                        <option value="" selected disabled>Select one</option>
                        <option value="show">Show</option>
                        <option value="hide">Hide</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select class="form-select" name="category_id" id="">
                        <option value="" selected disabled>Choose Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{$category->name}}
                        </option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
