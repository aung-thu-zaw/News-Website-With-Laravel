<x-guest-layout>
    <h1 class="text-center fw-bold text-secondary my-3">
        Forgot Password
    </h1>

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        @if (session()->has("status"))
        <x-form.session-status name="{{ session('status') }}" />
        @endif

        <x-form.floating-input type="email" name="email">
            <x-form.label name="Email Address" />
        </x-form.floating-input>


        <x-form.input-button name="Submit" />

    </form>
</x-guest-layout>
