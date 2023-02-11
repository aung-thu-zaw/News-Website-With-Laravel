<x-guest-layout>
    <h1 class="text-center text-primary mb-5">{{ REGISTER_HERE }}</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <x-form.floating-input type="text" name="name">
            <x-form.label name="{{ USERNAME }}" />
        </x-form.floating-input>

        <x-form.floating-input type="email" name="email">
            <x-form.label name="{{ EMAIL_ADDRESS }}" />
        </x-form.floating-input>

        <x-form.floating-input-password class="control-password-input1" name="password">
            <x-form.eye-icon class="eye-icon1" />
            <x-form.label name="{{ PASSWORD }}" />
        </x-form.floating-input-password>

        <x-form.floating-input-password class="control-password-input2" name="password_confirmation">
            <x-form.eye-icon class="eye-icon2" />
            <x-form.label name="{{ CONFIRM_PASSWORD }}" />
        </x-form.floating-input-password>

        <x-form.input-button name="{{ SIGN_UP }}" />

        <x-form.input-wrapper>
            <p class="text-center">
                {{ ALREADY_HAVE_AN_ACCOUNT_PLEASE }}
                <a href="{{ route('login') }}">{{ LOGIN }}</a>
            </p>
        </x-form.input-wrapper>

        <x-form.socialite-auth />
    </form>
</x-guest-layout>