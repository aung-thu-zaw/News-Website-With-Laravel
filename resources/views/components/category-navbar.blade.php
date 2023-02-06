@if(!session("language"))
@php
$currentLanguage=$defaultLanguage->short_name;
@endphp
@else
@php
$currentLanguage=session("language");
@endphp
@endif

@php
$languageId=App\Models\Language::where("short_name",$currentLanguage)->first()->id;
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary my-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#categoryNavDropdown"
            aria-controls="categoryNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="categoryNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-between" style="width: 100%">
                @foreach ($categories as $category)
                @if ($languageId==$category->language_id)


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-decoration-none" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $category->name }}
                    </a>







                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($category->subCategories as $subcategory)

                        @if ($subcategory->status_on_navbar==="show" && $subcategory->language_id==$languageId)
                        <li>
                            <a class="dropdown-item text-decoration-none" href="/{{ $category->slug }}/{{ $subcategory->slug }}/news{{ request('type') && request('query') ? '&type='
        .request('type') : '/?type=articles' }}">
                                {{$subcategory->name }}
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>







                </li>
                @endif
                @endforeach

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-decoration-none" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ GALLERY }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item text-decoration-none" href="{{ route('photo-gallery.index') }}">
                                {{ PHOTO_GALLERY }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-decoration-none" href="{{ route('video-gallery.index') }}">
                                {{ VIDEO_GALLERY }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>