<x-app-layout>


    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div>
                <img src="{{ asset('storage/avatars/'.$author->avatar) }}" alt=""
                    class="img-fluid img-thumbnail rounded-circle mb-5"
                    style="width: 200px; height: 200px; object-fit: cover" />
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h2 class="mb-3">{{ $author->name }}</h2>
                <small class="text-secondary">
                    <i class="fa-solid fa-pen-nib me-2"></i>
                    Role - {{ Str::ucfirst($author->role) }}
                    <a href="{{ $author->twitter_link }}" class="ms-3" data-bs-toggle="tooltip"
                        data-bs-title="Go To Twitter"><i class="fa-brands fa-twitter"></i></a>
                </small>
            </div>
        </div>

        <div class="my-3">
            <h3 class="text-center text-secondary p-3 border-bottom">About Of {{ $author->name }}</h3>
            <p>
                {!! $author->about !!}
            </p>
        </div>


        <div>
            <h3 class="border-bottom py-3 my-3">
                {{ request("type")=="articles"? "Article News" : "Video News" }}
            </h3>
        </div>

        <x-filter-search-form :subcategories="$subCategories" />

        @if (request("type")=="articles")
        <x-search-news-posts-result :posts="$newsPosts" :author="$author" />
        @endif

        @if (request("type")=="videos")
        <x-search-video-posts-result :posts="$videoNewsPosts" :author="$author" />
        @endif


    </div>
    </div>

</x-app-layout>