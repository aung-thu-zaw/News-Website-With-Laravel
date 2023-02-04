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
                            <li class="breadcrumb-item"><a href="{{ route('news.index') }}" class="text-decoration-none">Home</a></li>
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
                            <form action="{{ route('contact-us.send-email') }}" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-12">
                                    <label for="inputName" class="form-label">{{ NAME }}</label>
                                    <input type="name" name="name" class="form-control" value="{{ old('name') }}"
                                        id="inputName" placeholder="{{ YOUR_FULL_NAME }}">
                                    @error("name")
                                    <p class="text-center text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">{{ EMAIL_ADDRESS }}</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                        id="inputEmail4" placeholder="abcd@example.com">
                                    @error("email")
                                    <p class="text-center text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPhone" class="form-label">{{ PHONE }}</label>
                                    <input type="number" name="phone" class="form-control" value="{{ old('phone') }}"
                                        id="inputPhone" minlength="8" maxlength="13" placeholder="09245768454">
                                    @error("phone")
                                    <p class="text-center text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">{{ ADDRESS }}</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                        id="inputAddress" placeholder="parami2, Khatta Road, Myeik">
                                    @error("address")
                                    <p class="text-center text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label">{{ MESSAGE }}</label>
                                    <textarea class="form-control" name="content" value="{{ old('message') }}"
                                        id="inputMessage" cols="30" rows="10" placeholder="{{ MESSAGE }}..."></textarea>
                                    @error("content")
                                    <p class="text-center text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">{{ SUBMIT }}</button>
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
