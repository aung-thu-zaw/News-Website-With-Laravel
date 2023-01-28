<div class="my-5">
    <h5>Search with date</h5>
    <form action="{{ route('date-news.handle-date-format') }}" method="POST">
        @csrf
        <input type="datetime-local" class="form-control" name="date" onchange="this.form.submit()">
    </form>
</div>
