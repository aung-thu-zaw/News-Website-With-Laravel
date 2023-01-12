<x-dashboard-layout>
    @section("title", "Permission User Lists")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.permission-users.create') }}" class="btn btn-primary">Create
                    <i class="fa-solid fa-plus"></i></a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created At</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($permissionUsers as $permissionUser)
                    <tr>
                        <th scope="row">{{ $permissionUser->id }}</th>
                        <td>
                            <img src="{{ asset('storage/avatars/'.$permissionUser->avatar) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                        </td>
                        <td>
                            {{ $permissionUser->name }}
                        </td>
                        <td>
                            {{ $permissionUser->email }}
                        </td>
                        <td>
                            {{ $permissionUser->role }}
                        </td>
                        <td>
                            {{ $permissionUser->created_at }}
                        </td>

                        <td>
                            <div class=" d-flex align-items-center">

                                <form action="{{ route('admin.permission-users.edit',$permissionUser->id) }}"
                                    method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $permissionUsers->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.permission-users.destroy',$permissionUser->id) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")

                                    <input type="hidden" name="page" value="{{ $permissionUsers->currentPage() }}">
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
        {{ $permissionUsers->links() }}
    </div>
</x-dashboard-layout>
