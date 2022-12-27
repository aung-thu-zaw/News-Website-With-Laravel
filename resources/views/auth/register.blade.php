<x-guest-layout>
    <h1 class="text-center text-primary mb-5">Register Here</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <x-form.floating-input type="text" name="name">
            <x-form.label name="Username" />
        </x-form.floating-input>

        <x-form.floating-input type="email" name="email">
            <x-form.label name="Email Address" />
        </x-form.floating-input>

        <x-form.floating-input-password class="control-password-input1" name="password">
            <x-form.eye-icon class="eye-icon1" />
            <x-form.label name="password" />
        </x-form.floating-input-password>

        <x-form.floating-input-password class="control-password-input2" name="password_confirmation">
            <x-form.eye-icon class="eye-icon2" />
            <x-form.label name="Confirm Password" />
        </x-form.floating-input-password>

        <x-form.input-button name="Sign Up" />

        <x-form.input-wrapper>
            <p class="text-center">
                Already have an account! Please
                <a href="{{ route('login') }}">Login</a>
            </p>
        </x-form.input-wrapper>

        <x-form.socialite-auth />
    </form>
</x-guest-layout>
