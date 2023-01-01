<x-dashboard-layout>
    @section("title", "Video Gallery")
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

                    @foreach ($videos as $video)
                    <tr>

                        <th scope="row">{{ $video->id }}</th>
                        <th scope="row">
                            <iframe width="300px" height="200px"
                                src="https://www.youtube.com/embed/{{ $video->video_id }}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
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
                                    <input type="hidden" name="page" value="{{ $videos->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.video-gallery.destroy',$video->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $videos->currentPage() }}">
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
        {{ $videos->links() }}
    </div>
</x-dashboard-layout>
