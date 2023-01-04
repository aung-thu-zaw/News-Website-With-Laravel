<nav class="navbar navbar-expand-lg navbar-dark bg-secondary my-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNavDropdown"
            aria-controls="categoryNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="categoryNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-between" style="width: 100%">
                @foreach ($categories as $category)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-decoration-none" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $category->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($category->subCategories as $subcategory)
                        @if ($subcategory->status_on_navbar==="show")
                        <li>
                            <a class="dropdown-item text-decoration-none"
                                href="/news/{{ $category->slug }}/{{ $subcategory->slug }}">
                                {{$subcategory->name }}
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
                @endforeach

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-decoration-none" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item text-decoration-none" href="{{ route('photo-gallery.index') }}">
                                Photos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-decoration-none" href="{{ route('video-gallery.index') }}">
                                Videos
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
