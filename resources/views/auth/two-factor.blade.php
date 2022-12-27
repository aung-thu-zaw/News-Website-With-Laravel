<x-guest-layout>

    <h1 class="text-center text-primary mb-5">Two Factor Verification</h1>
    <p>
        You have recived an email which contains two factor login code.If you haven't received it, press
        <a href="{{ route('verify.resend') }}">here</a>
    </p>


    @if (session()->has("resend_code"))
    <x-form.session-status name="{{ session('resend_code') }}" />
    @endif


    <form action="{{ route('verify.store') }}" method="POST">
        @csrf

        <x-form.floating-input-wrapper>
            <input type="text" name="two_factor_code" class="form-control" id="floatingName"
                placeholder="Enter your verification code" required />
            <x-form.label name="Enter your verification code" />
            <x-form.error name="two_factor_code" />
        </x-form.floating-input-wrapper>

        <x-form.input-button name="Submit" />

    </form>

</x-guest-layout>
