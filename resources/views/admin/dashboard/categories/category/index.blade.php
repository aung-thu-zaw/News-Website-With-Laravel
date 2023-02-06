<x-dashboard-layout>
    @section("title", "Categories")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">

            <x-form.admin-search-form>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary text-decoration-none">Create
                    <i class="fa-solid fa-plus"></i></a>
            </x-form.admin-search-form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status (Show on Navbar)</th>
                        <th scope="col">Language</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            {{ $category->slug }}
                        </td>
                        <td>
                            {{ $category->status }}
                        </td>
                        <td>
                            {{ $category->language->name}}
                        </td>
                        <td>
                            {{ $category->created_at->format("Y-m-d / H:i A") }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.categories.edit',$category->slug) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $categories->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.categories.destroy',$category->slug) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $categories->currentPage() }}">
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
        {{ $categories->links() }}
    </div>
</x-dashboard-layout>