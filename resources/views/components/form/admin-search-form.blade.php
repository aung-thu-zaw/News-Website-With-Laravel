<div class="mb-3 d-flex align-items-center justify-content-between">
    <div class="w-50">
        <form action="" method="GET" class="d-flex align-items-center justify-content-between">
            <input type="text" name="search" id="" value="{{ request('search') }}" class="form-control"
                placeholder="search...">
            <button type="submit" class="btn btn-secondary ms-2">Search</button>
        </form>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
