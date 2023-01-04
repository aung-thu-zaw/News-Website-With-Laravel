<x-dashboard-layout>
    @section("title", "SubCategories")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.sub-categories.create') }}" class="btn btn-primary">Create
                    <i class="fa-solid fa-plus"></i></a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">SubCategory Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status (Show on Navbar)</th>
                        <th scope="col">Status (Show on Home)</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($subCategories as $subCategory)
                    <tr>
                        <th scope="row">{{ $subCategory->id }}</th>
                        <td>
                            {{ $subCategory->category->name }}
                        </td>
                        <td>
                            {{ $subCategory->name }}
                        </td>
                        <td>
                            {{ $subCategory->slug }}
                        </td>
                        <td>
                            {{ $subCategory->status_on_navbar }}
                        </td>
                        <td>
                            {{ $subCategory->status_on_home }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.sub-categories.edit',$subCategory->slug) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $subCategories->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.sub-categories.destroy',$subCategory->slug) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $subCategories->currentPage() }}">
                                    <button type="submit" class="btn btn-danger me-3"
                                        onclick="return confirm('Are you sure want to delete?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $subCategories->links() }}
    </div>
</x-dashboard-layout>
