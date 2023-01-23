<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-lg-8 col-md-6">
                <x-breadcrumbs />

                <x-single-news-details :post="$videoNewsPost" :socialshare="$socialShare" />

                <x-related-tags :post="$videoNewsPost" />


            </div>

            <div class="col-lg-4 col-md-6">
                <div>

                    <x-top-viewed-videos :topvideos="$topVideoNews" />

                    <x-tags />

                    <x-sidebar-top-advertisement />

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
