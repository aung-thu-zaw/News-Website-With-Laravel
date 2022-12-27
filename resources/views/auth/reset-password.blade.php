<x-guest-layout>
    <h1 class="text-center fw-bold text-secondary my-3">
        Forgot Password
    </h1>

    <form action="{{ route('password.store') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="hidden" name="email" value="{{ $request->email }}">

        <x-form.floating-input-password class="control-password-input1" name="password">
            <x-form.eye-icon class="eye-icon1" />
            <x-form.label name="password" />
        </x-form.floating-input-password>

        <x-form.floating-input-password class="control-password-input2" name="password_confirmation">
            <x-form.eye-icon class="eye-icon2" />
            <x-form.label name="Confirm Password" />
        </x-form.floating-input-password>

        <x-form.input-button name="Reset Password" />

    </form>
</x-guest-layout>
