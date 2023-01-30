<section class="container mt-3">

    <div class="border-top border-5 border-bottom border-secondary py-2">
        <h1 class="text-center">📰 Search News 📰</h1>
    </div>

    <form action="" class="my-3">
        <div class="row">

            <div class="col-lg-5 my-2">
                <input type="text" class="form-control" name="query" placeholder="Search...."
                    value="{{ request('query') }}" aria-label="Last name" required>
            </div>

            <div class="col-lg-3 my-2">
                <select name="subcategory" id="" class="form-select">
                    <option value="" disabled selected>Filter By Sub Category</option>
                    @foreach ($subCategories as $subCategory)
                    <option value="{{ $subCategory->slug }}" {{ $subCategory->slug==request('subcategory')? "selected"
                        :"" }}>
                        {{ $subCategory->name }} ({{ $subCategory->category->name}})
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-2 my-2">
                <select name="type" id="" class="form-select">
                    <option value="" disabled>Filter By Type</option>
                    <option value="articles" {{ request("type")=="articles" ? "selected" : "" }} selected>Articels
                    </option>
                    <option value="videos" {{ request("type")=="videos" ? "selected" : "" }}>Videos</option>
                </select>
            </div>

            <div class="col-lg-2 my-2 d-grid">
                <button class="btn btn-secondary">Search</button>
            </div>
        </div>
    </form>


</section>
