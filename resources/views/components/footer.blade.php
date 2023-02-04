<footer class="bg-dark text-white py-5" style="height: auto">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="heading">{{ ABOUT }}</h4>
                <p style="font-size: .8rem;" class="mb-0">
                    {{FOOTER_ABOUT}}
                </p>
            </div>

            <div class="col-lg-4">
                <h4 class="heading">{{ USEFUL_LINKS }}</h4>
                <ul class="">
                    <li><a href="{{ route('news.index') }}" class="text-white">{{ HOME }}</a></li>

                    @if ($termsAndConditions->status==="show")
                    <li><a href="{{ route('terms-and-conditions.index') }}" class="text-white">{{ TERMS_AND_CONDITIONS
                            }}</a>
                    </li>
                    @endif

                    @if ($privacyAndPolicy->status==="show")
                    <li><a href="{{ route('privacy-and-policy.index') }}" class="text-white">{{ PRIVACY_AND_POLICY
                            }}</a></li>
                    @endif

                    @if ($disclaimer->status==="show")
                    <li><a href="{{ route('disclaimer.index') }}" class="text-white">{{ DISCLAIMER }}</a></li>
                    @endif
                </ul>
            </div>

            <div class="col-lg-4">
                <h4 class="heading">{{ CONTACT }}</h4>

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
