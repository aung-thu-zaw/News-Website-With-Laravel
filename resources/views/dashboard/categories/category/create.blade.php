<x-dashboard-layout>
    @section("title", "Category Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.category') }}" class="btn btn-primary">View <i class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.category.store') }}" method="POST" class="border p-5">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select class="form-select" name="status" id="">
                        <option value="" selected disabled>Select one</option>
                        <option value="show">Show</option>
                        <option value="hide">Hide</option>
                    </select>
                </div>
                <div class="mb-3 d-grid">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
