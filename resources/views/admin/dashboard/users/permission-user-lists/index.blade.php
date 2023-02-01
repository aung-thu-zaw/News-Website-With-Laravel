<x-dashboard-layout>
    @section("title", "Permission User Lists")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">

            <x-form.admin-search-form>
                <a href="{{ route('admin.permission-users.create') }}" class="btn btn-primary text-decoration-none">
                    Create
                    <i class="fa-solid fa-plus"></i>
                </a>
            </x-form.admin-search-form>

            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Create Date</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    @foreach ($permissionUsers as $permissionUser)
                    <tr>
                        <th>{{ $permissionUser->id }}</th>
                        <td>
                            @if (!$permissionUser->avatar)
                            <img src="https://t3.ftcdn.net/jpg/01/18/01/98/360_F_118019822_6CKXP6rXmVhDOzbXZlLqEM2ya4HhYzSV.jpg"
                                alt="" class="img-fluid img-thumbnail" style="width: 200px;">
                            @else
                            <img src="{{ asset('storage/avatars/'.$permissionUser->avatar) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                            @endif
                        </td>
                        <td>{{ $permissionUser->name }}</td>
                        <td>{{ $permissionUser->email }}</td>
                        <td>{{ $permissionUser->role }}</td>
                        <td>{{ $permissionUser->created_at->format("Y-m-d / H:i A") }}</td>
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
