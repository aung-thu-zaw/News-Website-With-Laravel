<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="row container-fluid">
        <div class="col-1">
            <a class="navbar-brand" href="{{ route('news.index') }}">
                <img src="{{ asset('storage/website/'.$setting->logo) }}" alt="" class="img-fluid"
                    style="width: 100%; object-fit: cover;">
            </a>

        </div>
        <div class="col-11">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 w-auto mb-lg-0 d-flex mx-auto align-items-center justify-content-evenly">
                    <li class="nav-item mx-3">
                        <a href="{{ route('news.index') }}" class="nav-link text-decoration-none"
                            aria-current="page">Home</a>
                    </li>
                    @if ($about->status==="show")
                    <li class="nav-item mx-3">
                        <a href="{{ route('about-us.index') }}" class="nav-link text-decoration-none"
                            aria-current="page">About Us</a>
                    </li>
                    @endif

                    @if ($faq->status==="show")
                    <li class="nav-item mx-3">
                        <a href="{{ route('faq.index') }}" class="nav-link text-decoration-none"
                            aria-current="page">FAQ</a>
                    </li>
                    @endif

                    @if ($contact->status==="show")
                    <li class="nav-item mx-3">
                        <a href="{{ route('contact-us.index') }}" class="nav-link text-decoration-none"
                            aria-current="page">
                            Contact Us
                        </a>
                    </li>
                    @endif



                </ul>

                <div class="d-flex align-items-center justify-content-between w-auto">

                    <div class="dropdown me-5">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Languages
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-decoration-none" href="#">English</a></li>
                            <li><a class="dropdown-item text-decoration-none" href="#">Myanmar</a></li>

                        </ul>
                    </div>

                    @auth
                    <div class="dropdown ms-auto me-4">
                        <div class="d-flex align-items-center justify-content-center" href="#" role="button"
                            id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                            @if (!auth()->user()->avatar)
                            <img src="{{ asset('storage/avatars/default-avatar-'.auth()->user()->id.'.png') }}" alt=""
                                width="40px" height="40px" class="rounded-circle me-2" style="object-fit: cover" />

                            @elseif (auth()->user()->avatar && auth()->user()->google_id &&
                            str_starts_with(auth()->user()->avatar, "http"))
                            <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                                class="rounded-circle me-2" style="object-fit: cover" />

                            @elseif (auth()->user()->avatar && auth()->user()->facebook_id &&
                            str_starts_with(auth()->user()->avatar, "http"))
                            <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                                class="rounded-circle me-2" style="object-fit: cover" />

                            @elseif (auth()->user()->avatar && auth()->user()->github_id &&
                            str_starts_with(auth()->user()->avatar, "http"))
                            <img src="{{ auth()->user()->avatar }}" alt="" width="40px" height="40px"
                                class="rounded-circle me-2" style="object-fit: cover" />

                            @elseif (auth()->user()->avatar && !str_starts_with(auth()->user()->avatar, "http"))
                            <img src="{{ asset('/storage/avatars/'.auth()->user()->avatar) }}" alt="" width="40px"
                                height="40px" class="rounded-circle me-2" style="object-fit: cover" />
                            @endif

                            <p class="mb-0 text-white">{{ auth()->user()->name }}</p>
                        </div>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">



                            @can("admin")
                            <li>
                                <a class="dropdown-item text-decoration-none" href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                    <i class="fa-solid fa-gauge-high ms-3"></i>
                                </a>
                            </li>
                            @endcan

                            @can("editor")
                            <li>
                                <a class="dropdown-item text-decoration-none" href="{{ route('editor.dashboard') }}">
                                    Dashboard
                                    <i class="fa-solid fa-gauge-high ms-3"></i>
                                </a>
                            </li>
                            @endcan

                            @can("writer")
                            <li>
                                <a class="dropdown-item text-decoration-none" href="{{ route('writer.dashboard') }}">
                                    Dashboard
                                    <i class="fa-solid fa-gauge-high ms-3"></i>
                                </a>
                            </li>
                            @endcan

                            <li>
                                <a class="dropdown-item text-decoration-none" href="{{ route('profile.edit') }}">
                                    My Profile
                                    <i class="fa-solid fa-address-card ms-3"></i>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li style="cursor: pointer;">
                                <form action="{{ route('logout') }}" method="POST"
                                    class="d-flex align-items-center px-3">
                                    @csrf
                                    <input type="submit" value="Logout" class="border-0"
                                        style="background-color: transparent;">
                                    <i class="fa-solid fa-arrow-right-from-bracket ms-3"></i>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div>
                        <ul
                            class="navbar-nav mb-2 w-auto mb-lg-0 d-flex mx-auto align-items-center justify-content-evenly">
                            <li class="nav-item mx-3">
                                <a class="nav-link text-decoration-underline text-primary" aria-current="page"
                                    href="{{ route('register') }}">Register</a>
                            </li>
                            |
                            <li class="nav-item mx-3">
                                <a class="nav-link text-decoration-underline text-primary" aria-current="page"
                                    href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>

@if (session("user-create"))
<div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
    {!! session("user-create") !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
