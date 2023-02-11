<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-lg-8 col-md-6">
                <x-breadcrumbs :post="$videoNewsPost" />

                <x-single-news-details :post="$videoNewsPost" :socialshare="$socialShare" />

                <x-related-tags :post="$videoNewsPost" />

                <x-related-top-news-videos :posts="$relatedTopNewsVideos" />

            </div>

            <div class="col-lg-4 col-md-6">
                <div>

                    <x-related-news-box :relatednews="$relatedNewsPosts" />

                    <x-sidebar-top-advertisement />

                    <x-datepicker />

                    <x-tags />

                    <x-sidebar-bottom-advertisement />

                </div>
            </div>
        </div>
    </section>
</x-app-layout>