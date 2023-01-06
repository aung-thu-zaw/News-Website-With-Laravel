<x-app-layout>
    <section class="container mt-3 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    {{ $contact->title }}
                </h1>
                <div class="border-top border-bottom border-3 d-flex align-items-center justify-content-center my-3">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb" class="mt-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $contact->title }}</li>
                        </ol>
                    </nav>
                </div>
                <p>
                    {!! $contact->detail !!}
                </p>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card p-3 shadow-sm">
                            <form class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputName" class="form-label">Name</label>
                                    <input type="name" class="form-control" id="inputName" placeholder="your fullname">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4"
                                        placeholder="abcd@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPhone" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="inputPhone" placeholder="09245768454">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="parami2, Khatta Road, Myeik">
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label">Message</label>
                                    <textarea class="form-control" name="" id="inputMessage" cols="30" rows="10"
                                        placeholder="message..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="border border-3 rounded-3 shadow-sm" style="height: 500px;">

                            <iframe src="{{ $contact->map }}" width="100%" height="100%" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
