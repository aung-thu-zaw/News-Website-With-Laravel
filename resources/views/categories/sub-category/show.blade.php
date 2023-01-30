<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">
                <x-breadcrumbs :category="$category" :subcategory="$subCategory" />

                <x-single-search-form />

                @if (request("type")=="articles")
                <x-search-news-posts-result :posts="$newsPosts" />
                @endif

                @if (request("type")=="videos")
                <x-search-video-posts-result :posts="$videoNewsPosts" />
                @endif

            </div>
        </div>
    </section>
</x-app-layout>
