@if ($homeAdvertisement->middle_advertisement_status==="show")
<div class="container home-advertisement">
    @if ($homeAdvertisement->middle_advertisement_url)
    <a href="{{ $homeAdvertisement->middle_advertisement_url }}" target="_blank">
        <img src="{{ asset('storage/advertisements/'.$homeAdvertisement->middle_advertisement_photo) }}" alt=""
            class="home-advertisement-img img-fluid">
    </a>
    @else
    <img src="{{ asset('storage/advertisements/'.$homeAdvertisement->middle_advertisement_photo) }}" alt=""
        class="home-advertisement-img img-fluid">
    @endif
</div>
@endif
