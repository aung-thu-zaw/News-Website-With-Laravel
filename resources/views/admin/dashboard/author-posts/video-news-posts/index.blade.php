<x-dashboard-layout>
    @section("title", "Author Video News Posts")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">


            <x-form.admin-search-form />


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Video</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">SubCategory</th>
                        <th scope="col">Visitors</th>
                        <th scope="col">Author</th>
                        <th scope="col">Role</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($videoNewsPosts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <div class="card text-bg-dark" style="width: 200px;">
                                <img src="http://img.youtube.com/vi/{{ $post->video_id }}/mqdefault.jpg"
                                    class="card-img img-fluid img-thumbnail" alt="..."
                                    style="width: 100%; height: 100%; object-fit: cover">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <span class="fs-1" style="cursor: pointer">
                                        <a class="popup-youtube text-white"
                                            href="http://www.youtube.com/watch?v={{ $post->video_id }}">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
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
                            {{ $post->created_at->format("Y-m-d / H:i A") }}
                        </td>
                        <td>
                            <div class=" d-flex align-items-center">

                                <form action="{{ route('admin.author-video-news-posts.destroy',$post->id) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $videoNewsPosts->currentPage() }}">
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
        {{ $videoNewsPosts->links() }}
    </div>
</x-dashboard-layout>
