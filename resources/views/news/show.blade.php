<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-lg-8 col-md-6">
                <x-breadcrumbs />

                <x-single_news_details />

                <x-related_tags />

                <x-comments_box />

            </div>

            <div class="col-lg-4 col-md-6">
                <div>
                    <x-related_news_box />

                    <x-archive/>

                    <x-tags />

                    <x-second_advertisement_top />

                </div>
            </div>
        </div>
    </section>

</x-app-layout>
