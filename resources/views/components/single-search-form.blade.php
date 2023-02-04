<form action="" class="my-3">
    <div class="row">

        <div class="col-lg-7 my-2">
            <input type="text" class="form-control" name="query" placeholder="{{ SEARCH }}...."
                value="{{ request('query') }}" aria-label="Last name">
        </div>

        <div class="col-lg-2 my-2">
            <select name="type" id="" class="form-select">
                <option value="" disabled>{{ FILTER_BY_TYPE }}</option>
                <option value="articles" {{ request("type")=="articles" ? "selected" : "" }} selected>{{ ARTICLES }}
                </option>
                <option value="videos" {{ request("type")=="videos" ? "selected" : "" }}>{{ VIDEOS }}</option>
            </select>
        </div>

        <div class="col-lg-3 my-2 d-grid">
            <button class="btn btn-secondary">{{ SEARCH }}</button>
        </div>
    </div>
</form>
