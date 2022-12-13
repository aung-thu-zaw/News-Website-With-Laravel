<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Crete+Round:ital@0;1&family=Roboto+Slab:wght@500&family=Rubik:wght@400;500&family=Vollkorn:wght@400;500;700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="/assets/style.css" />
</head>

<body>
    <div class="container p-5">
        <h1 class="py-3 border-5 border-bottom my-5">Edit Profile</h1>

        <div class="row">
            <div class="col-lg-12">
                <div class="border shadow-sm p-3 mb-4">
                    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="change-information-tab" data-bs-toggle="tab"
                                data-bs-target="#change-information" type="button" role="tab"
                                aria-controls="change-information" aria-selected="true">
                                Change Account Information
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="change-password-tab" data-bs-toggle="tab"
                                data-bs-target="#change-password" type="button" role="tab"
                                aria-controls="change-password" aria-selected="false">
                                Change Password
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="account-security-tab" data-bs-toggle="tab"
                                data-bs-target="#account-security" type="button" role="tab"
                                aria-controls="account-security" aria-selected="false">
                                Account Security
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="delete-account-tab" data-bs-toggle="tab"
                                data-bs-target="#delete-account" type="button" role="tab" aria-controls="delete-account"
                                aria-selected="false">
                                Delete Account
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="change-information" role="tabpanel"
                            aria-labelledby="change-information-tab">
                            <div class="row">
                                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                    <img src="http://127.0.0.1:8001/uploads/admin.jpg" alt=""
                                        style="width: 350px; height: 350px; object-fit: cover"
                                        class="border border-5" />
                                </div>
                                <div class="col-lg-8">
                                    <form id="send-verification" method="post"
                                        action="{{ route('verification.send') }}">
                                        @csrf
                                    </form>
                                    <form action="{{ route('profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" value="{{ old('name',$user->name) }}"
                                                class="form-control" id="floatingName" placeholder="Username" />
                                            <label for="floatingName">Username</label>
                                            @error("name")
                                            <p class="text-center text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" value="{{ old('email',$user->email) }}"
                                                class="form-control" id="floatingEmail"
                                                placeholder="name@example.com" />
                                            <label for="floatingEmail">Email address</label>
                                            @error("email")
                                            <p class="text-center text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <input type="file" name="avatar" class="form-control" id="floatingEmail" />
                                        </div>
                                        <div class="mb-3 d-grid">
                                            <button type="submit" class="btn btn-primary">
                                                Update
                                            </button>
                                        </div>

                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !
                                        $user->hasVerifiedEmail())
                                        <div class="my-3">
                                            <p class="text-secondary">
                                                Your email address is unverified.

                                                <button form="send-verification" class="btn btn-outline-primary">
                                                    Click here to re-send the verification email
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 text-success">
                                                'A new verification link has been sent to your email
                                                address.
                                            </p>
                                            @endif
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="change-password" role="tabpanel"
                            aria-labelledby="change-password-tab">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-8">
                                    <form action="{{ route('password.update') }}" method="POST">
                                        <input type="hidden" name="active" value="current">
                                        @csrf
                                        @method("put")
                                        <div class="form-floating mb-3 signup-input">
                                            <input type="password" name="current_password"
                                                class="form-control control-password-input1" id="floatingPassword1"
                                                placeholder="Password" required />
                                            <i class="fa-solid fa-eye eye-icon1"></i>
                                            <label for="floatingPassword">Current Password</label>
                                            @error("current_password")
                                            <p class="text-center text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3 signup-input">
                                            <input type="password" name="password"
                                                class="form-control control-password-input2" id="floatingPassword2"
                                                placeholder="Password" required />
                                            <i class="fa-solid fa-eye eye-icon2"></i>
                                            <label for="floatingPassword2">Password</label>
                                            @error("password")
                                            <p class="text-center text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" name="password_confirmation"
                                                class="form-control control-password-input3" id="floatingPassword3"
                                                placeholder="Password" required />
                                            <i class="fa-solid fa-eye eye-icon3"></i>
                                            <label for="floatingPassword3">Confirm Password</label>
                                            @error("password_confirmation")
                                            <p class="text-center text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 d-grid">
                                            <button class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-security" role="tabpanel"
                            aria-labelledby="account-security-tab"></div>


                        <div class="tab-pane fade" id="delete-account" role="tabpanel"
                            aria-labelledby="delete-account-tab">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Harum, consequatur sint magnam laudantium eum atque, odio
                                porro similique illo id soluta sit! Magnam consectetur quis
                                asperiores! Similique deserunt perspiciatis odit delectus,
                                iure ipsum harum sequi enim asperiores neque reprehenderit?
                                Velit eos sunt ullam iusto, quibusdam temporibus ipsa
                                repudiandae perspiciatis similique!
                            </p>

                            <div class="mb-3">
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Delete Account</button>
                            </div>


                            <form action="{{ route('profile.destroy') }}" method="POST">
                                @csrf
                                @method('delete')
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">


                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Are you sure want to
                                                    delete?</h5>


                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input type="password" name="password"
                                                        class="form-control control-password-input1"
                                                        id="floatingPassword2" placeholder="Password" required />
                                                    <i class="fa-solid fa-eye eye-icon1"></i>
                                                    <label for="floatingPassword2">Password</label>

                                                    @if($errors->userDeletion->get('password'))

                                                    @foreach ($errors->userDeletion->get('password') as $message)
                                                    <p class="text-center text-danger">{{ $message }}</p>
                                                    @endforeach

                                                    @endif

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>











                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="/assets/js/control_form_input.js"></script>
</body>

</html>





























{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
