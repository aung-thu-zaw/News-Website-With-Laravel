<x-dashboard-layout>
    @section("title", "Live Videos")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">

            <x-form.admin-search-form>
                <a href="{{ route('admin.live-videos.create') }}" class="btn btn-primary text-decoration-none">
                    Create
                    <i class="fa-solid fa-plus"></i>
                </a>
            </x-form.admin-search-form>

            <table class="table table-bordered">

                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Video</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </thead>

                <tbody>
                    @foreach ($liveVideos as $video)
                    <tr>
                        <th>{{ $video->id }}</th>
                        <td>
                            <div class="card text-bg-dark" style="width: 200px;">
                                <img src="http://img.youtube.com/vi/{{ $video->video_id }}/mqdefault.jpg"
                                    class="card-img img-fluid img-thumbnail" alt="..."
                                    style="width: 100%; height: 100%; object-fit: cover">
                                <div class="card-img-overlay d-flex align-items-center justify-content-center">
                                    <span class="fs-1" style="cursor: pointer">
                                        <a class="popup-youtube text-white"
                                            href="http://www.youtube.com/watch?v={{ $video->video_id }}">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td>{{ $video->title }}</td>
                        <td>
                            <div class=" d-flex align-items-center">
                                <form action="{{ route('admin.live-videos.edit',$video->id) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $liveVideos->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.live-videos.destroy',$video->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $liveVideos->currentPage() }}">
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
        {{ $liveVideos->links() }}
    </div>
</x-dashboard-layout>
