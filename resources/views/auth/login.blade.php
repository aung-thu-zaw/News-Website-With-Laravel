<x-guest-layout>
    <h1 class="text-center text-primary mb-5">{{ LOGIN_HERE }}</h1>
    @if (session("expire"))
    <p class="text-danger text-center">
        {{ session("expire") }}
    </p>
    @endif
    <form action="{{ url('/login') }}" method="POST">
        @csrf

        @if (session()->has("status"))
        <x-form.session-status name="{{ session('status') }}" />
        @endif

        <x-form.floating-input type="email" name="email">
            <x-form.label name="{{ EMAIL_ADDRESS }}" />
        </x-form.floating-input>

        <x-form.floating-input-password class="control-password-input1" name="password">
            <x-form.eye-icon class="eye-icon1" />
            <x-form.label name="{{ PASSWORD }}" />
        </x-form.floating-input-password>

        <x-form.input-wrapper>
            <input type="checkbox" name="remember" class="form-check-input me-2" />
            <label for="remember">{{ REMEMBER_ME }}</label>
        </x-form.input-wrapper>

        <x-form.input-button name="{{ LOGIN }}" />

        <x-form.input-wrapper>
            <a href="{{ route('password.request') }}" class="text-primary">{{ FORGOT_PASSWORD }}?</a>
        </x-form.input-wrapper>

        <x-form.input-wrapper>
            <p class="text-center">
                {{ YOU_DONT_HAVE_AN_ACCOUNT_PLEASE }}
                <a href="{{ route('register') }}">{{ REGISTER_HERE }}</a>
            </p>
        </x-form.input-wrapper>

        <x-form.socialite-auth />
    </form>
</x-guest-layout>
