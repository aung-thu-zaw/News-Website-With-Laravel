<form action="" class="my-3">
    <div class="row">

        <div class="col-lg-9 my-2">
            <input type="text" class="form-control" name="query" placeholder="Search...." value="{{ request('query') }}"
                aria-label="Last name">
        </div>


        <div class="col-lg-3 my-2 d-grid">
            <button class="btn btn-secondary">Search</button>
        </div>
    </div>
</form>
