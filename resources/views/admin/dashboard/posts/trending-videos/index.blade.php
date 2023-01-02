<x-dashboard-layout>
    @section("title", "Trending Videos")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.video-gallery.create') }}" class="btn btn-primary">Create
                    <i class="fa-solid fa-plus"></i></a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Video</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($trendingVideos as $video)
                    <tr>

                        <th scope="row">{{ $video->id }}</th>
                        <th scope="row">

                            <div class="card text-bg-dark" style="width: 200px;">
                                <img src="http://img.youtube.com/vi/{{ $video->video_id }}/mqdefault.jpg"
                                    class="card-img img-fluid" alt="..."
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
                        </th>
                        <td>
                            {{ $video->owner }}
                        </td>
                        <td>
                            {!! $video->caption !!}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.video-gallery.edit',$video->id) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $trendingVideos->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.video-gallery.destroy',$video->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $trendingVideos->currentPage() }}">
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
        {{ $trendingVideos->links() }}
    </div>
</x-dashboard-layout>
