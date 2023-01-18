<x-dashboard-layout>
    @section("title", "Normal User Lists")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">

            <x-form.admin-search-form />

            <table class="table table-bordered">

                <thead>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Create Date</th>
                </thead>

                <tbody>
                    @foreach ($normalUsers as $normalUser)
                    <tr>
                        <th>{{$normalUser->id }}</th>

                        <td>
                            @if (!$normalUser->avatar)
                            <img src="https://t3.ftcdn.net/jpg/01/18/01/98/360_F_118019822_6CKXP6rXmVhDOzbXZlLqEM2ya4HhYzSV.jpg"
                                alt="" class="img-fluid img-thumbnail" style="width: 200px;">
                            @else
                            <img src="{{ asset('storage/avatars/'.$normalUser->avatar) }}" alt=""
                                class="img-fluid img-thumbnail" style="width: 200px;">
                            @endif
                        </td>

                        <td> {{ $normalUser->name }}</td>
                        <td> {{ $normalUser->email }}</td>
                        <td> {{ $normalUser->created_at->format("Y-m-d") }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {{ $normalUsers->links() }}
    </div>
</x-dashboard-layout>
