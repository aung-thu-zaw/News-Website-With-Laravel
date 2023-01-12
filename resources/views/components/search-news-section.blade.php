<section class="container mt-3 py-4">

    <div class="border-top border-5 border-bottom border-secondary py-2">
        <h1 class="text-center">📰 Search News 📰</h1>
    </div>

    <form action="" class="mt-3">
        <div class="row">
            <div class="col-lg-7 my-2">
                <input type="text" class="form-control" name="search" placeholder="Search...."
                    value="{{ request('search') }}" aria-label="Last name">
            </div>
            <div class="col-lg-2 my-2 d-grid">
                <button class="btn btn-secondary">Search</button>
            </div>
            <div class="col-lg-3 my-2">
                <select name="subcategory" id="" class="form-select">
                    <option value="" disabled selected>Filter With Sub Category</option>
                    @foreach ($subCategories as $subCategory)
                    <option value="{{ $subCategory->slug }}">{{ $subCategory->name }} ({{ $subCategory->category->name
                        }})</option>
                    @endforeach
                </select>
            </div>

        </div>
    </form>
</section>
