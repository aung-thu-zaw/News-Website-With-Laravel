<x-dashboard-layout>
    @section("title", "Category Edit")
    <div class="row">
        <div class="col-12 p-5">
            <form action="{{ route('admin.category.update',$category->slug) }}" method="POST" class="border p-5">
                @csrf
                @method("PATCH")
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}"
                        aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}"
                        aria-describedby="helpId" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select class="form-select" name="status" id="">
                        <option value="" selected disabled>Select one</option>
                        <option value="show" {{ $category->status==="show"?"selected":"" }}>Show</option>
                        <option value="hide" {{ $category->status==="hide"?"selected":"" }}>Hide</option>
                    </select>
                </div>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
