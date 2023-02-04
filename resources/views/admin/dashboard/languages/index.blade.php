<x-dashboard-layout>
    @section("title", "Languages")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">


            <x-form.admin-search-form>
                <a href="{{ route('admin.languages.create') }}" class="btn btn-primary text-decoration-none">Create
                    <i class="fa-solid fa-plus"></i></a>
            </x-form.admin-search-form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Short Name</th>
                        <th scope="col">Is Default?</th>
                        <th scope="col">Update Detail</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($languages as $language)
                    <tr>
                        <th scope="row">{{ $language->id }}</th>
                        <td>
                            {{ $language->name }}
                        </td>
                        <td>
                            {{ $language->short_name }}
                        </td>
                        <td>
                            {{ $language->is_default }}
                        </td>
                        <td>
                            <a href="{{ route('admin.update-detail.handle',$language->id) }}"
                                class="btn btn-info text-decoration-none">
                                Update Detail
                            </a>
                        </td>
                        <td>
                            {{ $language->created_at->format("Y-m-d / H:i A") }}
                        </td>
                        <td>
                            @if ($language->id!=1)
                            <div class="d-flex align-items-center">

                                <form action="{{ route('admin.languages.edit',$language->id) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="page" value="{{ $languages->currentPage() }}">
                                    <button type="submit" class="btn btn-info me-3">
                                        Edit
                                    </button>
                                </form>

                                <form action="{{ route('admin.languages.destroy',$language->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="page" value="{{ $languages->currentPage() }}">
                                    <button type="submit" class="btn btn-danger me-3"
                                        onclick="return confirm('Are you sure want to delete?');">
                                        Delete
                                    </button>
                                </form>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $languages->links() }}
    </div>
</x-dashboard-layout>
