<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $termsAndConditions->title }}
                </h1>
                <div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center my-3">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $termsAndConditions->title }}</li>
                        </ol>
                    </nav>
                </div>
                <p>
                    {!! $termsAndConditions->detail !!}
                </p>


            </div>
        </div>
    </section>
</x-app-layout>
