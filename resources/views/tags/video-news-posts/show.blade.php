<x-app-layout>
    <section class="container mt-3 py-3" style="height: 700px">
        <div class="row g-3">
            <div class="col-12">

                @foreach ($tag->newsPosts as $post)
                {{ $post->title }}
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
