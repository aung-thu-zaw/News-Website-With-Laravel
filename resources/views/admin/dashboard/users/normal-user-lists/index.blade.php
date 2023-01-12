<x-dashboard-layout>
    @section("title", "Normal User Lists")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @foreach ($normalUsers as $normalUser)
                    <tr>
                        <th scope="row">{{ $normalUser->id }}</th>
                        <td>
                            <img src="{{ asset('storage/avatars/'.$normalUser->avatar) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                        </td>
                        <td>
                            {{ $normalUser->name }}
                        </td>

                        <td>
                            {{ $normalUser->email }}
                        </td>
                        <td>
                            {{ $normalUser->created_at }}
                        </td>

                        {{-- <td>
                            <div class=" d-flex align-items-center">

                                <form action="{{ route('admin.noraml-user-lists.destroy',$normalUser->id) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <input type="hidden" name="page" value="{{ $normalUsers->currentPage() }}">
                                    <button type="submit" class="btn btn-danger me-3"
                                        onclick="return confirm('Are you sure want to delete?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $normalUsers->links() }}
    </div>
</x-dashboard-layout>
