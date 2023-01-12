<x-dashboard-layout>
    @section("title", "Permission User Create")
    <div class="row">
        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.permission-users.index') }}" class="btn btn-primary">View <i
                        class="fa-solid fa-eye"></i></a>
            </div>
            <form action="{{ route('admin.permission-users.store') }}" method="POST" enctype="multipart/form-data"
                class="border p-5">
                @csrf

                <div class="mb-3">
                    <img src="" alt="" id="previewPhoto1" class="img-fluid img-thumbnail" style="width: 400px">
                </div>

                <x-form.input type="file" name="avatar" id="file1">
                    <x-form.label name="Choose Post Photo *" />
                </x-form.input>


                <x-form.input type="text" name="name">
                    <x-form.label name="Name *" />
                </x-form.input>

                <x-form.input type="email" name="email">
                    <x-form.label name="Email Address *" />
                </x-form.input>

                <x-form.input type="password" name="password">
                    <x-form.label name="Password *" />
                </x-form.input>

                <x-form.input type="password" name="password_confirmation">
                    <x-form.label name="Confirm Password *" />
                </x-form.input>

                <x-form.input-wrapper>
                    <x-form.label name="Role *" />
                    <select class="form-select" name="role" id="" required>
                        <option value="" selected disabled>Select role</option>
                        <option value="admin">
                            Admin
                        </option>
                        <option value="editor">
                            Editor
                        </option>
                        <option value="author">
                            Author
                        </option>
                    </select>

                    <x-form.error name="role" />
                </x-form.input-wrapper>

                <x-form.input-button name="Create" />
            </form>
        </div>
    </div>
</x-dashboard-layout>
