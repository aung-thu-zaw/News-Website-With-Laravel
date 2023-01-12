<footer class="bg-dark text-white py-5" style="height: auto">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="heading">About</h4>
                <p style="font-size: .8rem;" class="mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book.
                </p>
            </div>

            <div class="col-lg-4">
                <h4 class="heading">Useful Links</h4>
                <ul class="">
                    <li><a href="{{ route('news.index') }}" class="text-white">Home</a></li>

                    @if ($termsAndConditions->status==="show")
                    <li><a href="{{ route('terms-and-conditions.index') }}" class="text-white">Terms And Conditions</a>
                    </li>
                    @endif

                    @if ($privacyAndPolicy->status==="show")
                    <li><a href="{{ route('privacy-and-policy.index') }}" class="text-white">Privacy And Policy</a></li>
                    @endif

                    @if ($disclaimer->status==="show")
                    <li><a href="{{ route('disclaimer.index') }}" class="text-white">Disclaimer</a></li>
                    @endif
                </ul>
            </div>

            <div class="col-lg-4">
                <h4 class="heading">Contact</h4>

                <div class="d-flex align-items-center">
                    <div>
                        <i class="fas fa-map-marker-alt me-3"></i>
                    </div>
                    <div>
                        34 Antiger Lane
                        <br>
                        PK Lane, USA, 12937
                    </div>

                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <i class="far fa-envelope me-3"></i>
                    </div>
                    <div>
                        example@gmail.com
                    </div>

                </div>
                <div class="d-flex align-items-center">
                    <div>
                        <i class="fas fa-phone-alt me-3"></i>

                    </div>
                    <div>
                        09263454673634
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <span class="me-4">
                        <a href="#" class="text-dark"><i class="fab fa-facebook"></i></a>
                    </span>
                    <span class="me-4">
                        <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                    </span>
                    <span class="me-4">
                        <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
