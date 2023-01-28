@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

<div class="col-lg-4 py-2">

    <x-live-video />

    <x-online-poll />

    <x-datepicker />

    <x-tags />

    <x-sidebar-top-advertisement />

    <x-popular-news-and-recent-news />

    <x-random-news-for-you />

    <x-sidebar-bottom-advertisement />


</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
