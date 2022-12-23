<x-dashboard-layout>
    <div class="row">
        <div class="col-12 p-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Ad Photo</th>
                        <th scope="col">Url</th>
                        <th scope="col">Location</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="https://letsenhance.io/static/334225cab5be263aad8e3894809594ce/75c5a/MainAfter.jpg"
                                alt="" style="width:200px;">
                        </td>
                        <td>https://www.blahblah.com</td>
                        <td>
                            Bottom
                        </td>
                        <td>
                            Show
                        </td>
                        <td>
                            <a href="{{ route('admin.sidebar.advertisement.edit') }}" class="btn btn-info me-3">
                                Edit
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="https://letsenhance.io/static/334225cab5be263aad8e3894809594ce/75c5a/MainAfter.jpg"
                                alt="" style="width:200px;">
                        </td>
                        <td>https://www.blahblah.com</td>
                        <td>
                            Top
                        </td>
                        <td>
                            Show
                        </td>
                        <td>
                            <a href="{{ route('admin.sidebar.advertisement.edit') }}" class="btn btn-info me-3">
                                Edit
                            </a>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>
