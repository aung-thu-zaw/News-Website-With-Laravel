<x-dashboard-layout>
    @section("title", "Language Update Detail")
    <div class="row">
        <div class="col-12 px-5 pt-5 pb-3">


            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.languages.index') }}" class="btn btn-primary text-decoration-none"><i
                        class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>

            <form action="{{ route('admin.update-detail.update',$language) }}" method="POST">
                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($jsonData as $key=>$value)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                {{ $key }}
                            </td>
                            <td>
                                <input type="hidden" name="key[]" value=" {{ $key }}">
                                <input type="text" class="form-control" name="value[]" value=" {{ $value }}">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-3 d-grid">
                    <button type="submit" class="btn btn-primary shadow-lg">Update</button>
                </div>
            </form>
        </div>
        {{-- {{ $languages->links() }} --}}
    </div>
</x-dashboard-layout>
