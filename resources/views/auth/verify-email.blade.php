<x-guest-layout>
    <p class="text-secondary">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the
        link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
    </p>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 text-success">
        A new verification link has been sent to the email address you provided during registration.
    </div>
    @endif

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf

        <x-form.input-button name="Resend Verification Email" />

    </form>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <x-form.input-button name="Logout" />

    </form>
</x-guest-layout>
