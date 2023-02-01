<x-dashboard-layout>
    @section("title", "Photos")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">


            <x-form.admin-search-form>
                <a href="{{ route('admin.photo-gallery.create') }}" class="btn btn-primary text-decoration-none">Create
                    <i class="fa-solid fa-plus"></i></a>
            </x-form.admin-search-form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($photos as $photo)
                    <tr>
                        <th scope="row">{{ $photo->id }}</th>
                        <td>
                            <img src="{{ asset('storage/photo-gallery/'.$photo->photo) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                        </td>
                        <td>
                            {{ $photo->owner }}
                        </td>
                        <td>
                            {!! $photo->caption !!}
                        </td>
                        <td>
                            {{ $photo->created_at->format("Y-m-d / H:i A") }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.photo-gallery.edit',$photo->id) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $photos->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.photo-gallery.destroy',$photo->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $photos->currentPage() }}">
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
        {{ $photos->links() }}
    </div>
</x-dashboard-layout>
