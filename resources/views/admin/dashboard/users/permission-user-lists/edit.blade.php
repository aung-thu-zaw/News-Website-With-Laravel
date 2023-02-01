<x-dashboard-layout>
    @section("title", "Permission User Edit")

    <div class="row">

        <div class="col-12 p-5">
            <div class="mb-3 d-flex align-items-center justify-content-end">
                <a href="{{ route('admin.permission-users.index') }}" class="btn btn-primary text-decoration-none">
                    View
                    <i class="fa-solid fa-eye"></i>
                </a>
            </div>
            <div class="border p-5">
                <form action="{{ route('admin.permission-users.update',$user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")

                    <input type="hidden" name="page" value="{{$page}}">

                    <div class="mb-3">
                        <img src="{{ asset('storage/avatars/'.$user->avatar) }}" class="img-fluid img-thumbnail" alt=""
                            id="previewPhoto1" style="width: 400px">
                    </div>

                    <x-form.input type="file" name="avatar" id="file1">
                        <x-form.label name="Choose Post Photo" />
                    </x-form.input>


                    <x-form.input type="text" name="name" value="{{ $user->name }}" required="required">
                        <x-form.label name="Name *" />
                    </x-form.input>

                    <x-form.input type="email" name="email" value="{{ $user->email }}" required="required">
                        <x-form.label name="Email Address *" />
                    </x-form.input>

                    <x-form.input-wrapper>
                        <x-form.label name="Password" />
                        <input type="password" name="password" class="form-control" placeholder="password" />
                        <x-form.error name="password" />
                    </x-form.input-wrapper>

                    <x-form.input-wrapper>
                        <x-form.label name="Confirm Password" />
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="confirm password" />
                        <x-form.error name="password" />
                    </x-form.input-wrapper>


                    <x-form.input-wrapper>
                        <x-form.label name="Role *" />
                        <select class="form-select" name="role" id="" required="required">
                            <option value="" selected disabled>Select role</option>
                            <option value="editor" {{ $user->role==="editor"? "selected":"" }}>
                                Editor
                            </option>
                            <option value="author" {{ $user->role==="author"? "selected":"" }}>
                                Author
                            </option>
                        </select>

                        <x-form.error name="role" />
                    </x-form.input-wrapper>


                    <x-form.textarea name="about" value="{{ $user->about }}" required="required">
                        <x-form.label name="About *" />
                    </x-form.textarea>

                    <x-form.input type="text" name="twitter_link" value="{{ $user->twitter_link }}" required="required">
                        <x-form.label name="Twitter Link *" />
                    </x-form.input>


                    <x-form.input-button name="Update" />
                </form>
            </div>

        </div>
    </div>
</x-dashboard-layout>
