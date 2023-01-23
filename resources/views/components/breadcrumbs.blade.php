@props(["post"=>"","category"=>"","subcategory"=>"","photos"=>"","videos"=>"","date"=>"","popular"=>"","recent"=>"","videonews"=>"","tag"=>""])

@if ($post)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a class="text-decoration-none"
                    href="{{ route('category.news.show',$post->subCategory->category->slug) }}" data-bs-toggle="tooltip"
                    data-bs-title="Category">
                    {{ $post->subCategory->category->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a class="text-decoration-none"
                    href="/news/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }} "
                    data-bs-toggle="tooltip" data-bs-title="SubCategory">
                    {{$post->subCategory->name }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    {{ $post->title }}
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif

@if ($category && $subcategory)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a class="text-decoration-none" href="{{ route('category.news.show',$category->slug) }}"
                    data-bs-toggle="tooltip" data-bs-title="Category">
                    {{ $category->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="SubCategory">{{ $subcategory->name }}</span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All
                </span>
            </li>
        </ol>
    </nav>
</div>

@elseif ($category)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Category">
                    {{ $category->name}}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif


@if (empty($post) && empty($subcategory) && empty($category) && $photos)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    Gallery
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    {{$photos}}
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif

@if (empty($post) && empty($subcategory) && empty($category) && $videos)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    Gallery
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    {{ $videos }}
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif

@if ($date)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Date">
                    {{ DateTimeHelper::formatDate($date,"created_at") }}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif


@if ($popular)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Popular News">
                    {{ $popular }}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif
@if ($recent)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Recent News">
                    {{ $recent }}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif

@if ($videonews)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    {{ $videonews }}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    All Posts
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif


@if ($tag)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center mb-5">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a class="text-decoration-none" href="{{ route('news.index') }}" data-bs-toggle="tooltip"
                    data-bs-title="Home">Tags</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    {{ $tag }}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Post">
                    All Posts
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif
