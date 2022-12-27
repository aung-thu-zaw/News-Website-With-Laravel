<x-guest-layout>
    <h1 class="text-center text-primary mb-5">Login Here</h1>
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

        <x-form.floating-input type="email" name="email" >
        <x-form.label name="Email Address" />
        </x-form.floating-input>

        <x-form.floating-input-password class="control-password-input1" name="password">
            <x-form.eye-icon class="eye-icon1" />
            <x-form.label name="password" />
        </x-form.floating-input-password>

        <x-form.input-wrapper>
            <input type="checkbox" name="remember" class="form-check-input me-2" />
            <label for="remember">Remember me</label>
        </x-form.input-wrapper>

        <x-form.input-button name="Login" />

        <x-form.input-wrapper>
            <a href="{{ route('password.request') }}" class="text-primary">Forgot Password?</a>
        </x-form.input-wrapper>

        <x-form.input-wrapper>
            <p class="text-center">
                You don't have an account! Please
                <a href="{{ route('register') }}">Register Here</a>
            </p>
        </x-form.input-wrapper>

        <x-form.socialite-auth />
    </form>
</x-guest-layout>
