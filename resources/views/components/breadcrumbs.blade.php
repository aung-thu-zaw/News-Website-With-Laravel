@props(["post"=>"","category"=>"","subcategory"=>"","photos"=>"","videos"=>""])

@if ($post)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('news.home') }}" data-bs-toggle="tooltip" data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{ route('category.show',$post->subCategory->category->slug) }}" data-bs-toggle="tooltip"
                    data-bs-title="Category">
                    {{ $post->subCategory->category->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="/news/{{ $post->subCategory->category->slug }}/{{ $post->subCategory->slug }} "
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
                <a href="{{ route('news.home') }}" data-bs-toggle="tooltip" data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="{{ route('category.show',$category->slug) }}" data-bs-toggle="tooltip"
                    data-bs-title="Category">
                    {{ $category->name}}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="SubCategory">{{ $subcategory->name }}</span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Posts">
                    All Post
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
                <a href="{{ route('news.home') }}" data-bs-toggle="tooltip" data-bs-title="Home">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="Category">
                    {{ $category->name}}
                </span>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <span data-bs-toggle="tooltip" data-bs-title="SubCategory">
                    All SubCategory
                </span>
            </li>
        </ol>
    </nav>
</div>
@endif


@if (empty($post) && empty($subcategory) && empty($category) && $photos)
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('news.home') }}" data-bs-toggle="tooltip" data-bs-title="Home">Home</a>
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
<div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('news.home') }}" data-bs-toggle="tooltip" data-bs-title="Home">Home</a>
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
