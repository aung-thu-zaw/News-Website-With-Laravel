<x-app-layout>
    <section class="container mt-3 py-3" style="height: 700px">
        <div class="row g-3">
            <div class="col-12">

                <x-breadcrumbs :category="$category" />

                <div class="row">
                    <div class="col-lg-10">
                        <form action="" class="mb-3">
                            <div class="row g-2">
                                <div class="col-lg-10 my-2">
                                    <input type="text" class="form-control" placeholder="Search...."
                                        aria-label="Last name">
                                </div>
                                <div class="col-lg-2 my-2 d-grid">
                                    <button class="btn btn-secondary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>Sort By</option>
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    @foreach ($category->subCategories as $subCategory)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="/news/{{ $subCategory->category->slug }}/{{ $subCategory->slug }}" class="">
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
