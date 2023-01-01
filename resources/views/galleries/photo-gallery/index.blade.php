<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row g-3">
            <div class="col-12">


                <x-breadcrumbs photos="Photos" />

                <div class="row g-3">
                    <div class="row g-3 popup-gallery">

                        @foreach ($photos as $photo)
                        <div class="col-lg-3 col-md-4">
                            <figure class="figure" style="width: 100%; height: 100%;">
                                <a href="{{ asset('storage/photo-gallery/'.$photo->photo) }}"
                                    title="{{ $photo->owner }}">
                                    <img src="{{ asset('storage/photo-gallery/'.$photo->photo) }}"
                                        class="figure-img img-fluid rounded" width="100%" height="100%">
                                </a>
                                <figcaption class="figure-caption text-end">{{ $photo->caption }}</figcaption>
                            </figure>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
