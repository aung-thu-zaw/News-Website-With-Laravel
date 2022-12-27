<nav class="navbar navbar-expand-lg navbar-dark bg-secondary my-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNavDropdown"
            aria-controls="categoryNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="categoryNavDropdown">
            <ul class="navbar-nav d-flex align-items-center">

                @foreach ($categories as $category)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $category->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        @foreach ($category->subCategories as $subcategory)

                        @if ($subcategory->status_on_navbar==="show")
                        <li><a class="dropdown-item" href="{{ $subcategory->slug }}">{{ $subcategory->name }}</a></li>
                        @endif

                        @endforeach

                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
