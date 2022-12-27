<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-lg-8 col-md-6">
                <x-breadcrumbs :post="$newsPost" />

                <x-single-news-details :post="$newsPost" />

                <x-related-tags />

                <x-comments-box />

            </div>

            <div class="col-lg-4 col-md-6">
                <div>
                    <x-related-news-box />

                    <x-archive />

                    <x-tags />

                    <x-sidebar-top-advertisement/>

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
