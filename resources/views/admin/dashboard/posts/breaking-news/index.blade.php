<x-dashboard-layout>
    @section("title", "Breaking News")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.post.breaking-news.create') }}" class="btn btn-primary">Create
                    <i class="fa-solid fa-plus"></i></a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Title</th>
                        <th scope="col">slug</th>
                        <th scope="col">Category</th>
                        <th scope="col">SubCategory</th>
                        <th scope="col">Visitors</th>
                        <th scope="col">Author</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($breakingNewsPosts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <img src="{{ asset('storage/thumbnails/'.$post->thumbnail) }}" alt="" class="img-fluid"
                                style="width: 200px;">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->slug }}
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
                            <div class=" d-flex align-items-center">
                                <form action="{{ route('admin.post.breaking-news.edit',$post->slug) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $breakingNewsPosts->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.post.breaking-news.destroy',$post->slug) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $breakingNewsPosts->currentPage() }}">
                                    <button type="submit" class="btn btn-danger me-3"
                                        onClick="return confirm('Are you sure want to delete?');">
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
        {{ $breakingNewsPosts->links() }}
    </div>
</x-dashboard-layout>
