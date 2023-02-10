<x-dashboard-layout>
    @section("title", "News Posts")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">

            <x-form.admin-search-form>
                <a href="{{ route('admin.news-posts.create') }}" class="btn btn-primary text-decoration-none">Create
                    <i class="fa-solid fa-plus"></i></a>
            </x-form.admin-search-form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">SubCategory</th>
                        <th scope="col">Visitors</th>
                        <th scope="col">Author</th>
                        <th scope="col">Role</th>
                        <th scope="col">Language</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($newsPosts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->subCategory->category->name }}
                        </td>
                        <td>
                            {{ $post->subCategory->name }}
                        </td>
                        <td>
                            {{ $post->visitors }}
                        </td>
                        <td>
                            {{ $post->author->name }}
                        </td>
                        <td>
                            {{ $post->author->role }}
                        </td>
                        <td>
                            {{ $post->language->name }}
                        </td>
                        <td>
                            {{ $post->created_at->format("Y-m-d / H:i A") }}
                        </td>
                        <td>
                            <div class=" d-flex align-items-center">

                                <form action="{{ route('admin.news-posts.edit',$post->slug) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $newsPosts->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.news-posts.destroy',$post->slug) }}" method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <input type="hidden" name="page" value="{{ $newsPosts->currentPage() }}">
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
        {{ $newsPosts->links() }}
    </div>
</x-dashboard-layout>