<x-app-layout>
    <section class="container mt-3 py-3" style="height: 700px">
        <div class="row g-3">
            <div class="col-12">

                <x-breadcrumbs :category="$category" />

                <div class="row g-3">
                    @foreach ($category->subCategories as $subCategory)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="/{{ $subCategory->category->slug }}/{{ $subCategory->slug }}">
                                    {{ $subCategory->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
