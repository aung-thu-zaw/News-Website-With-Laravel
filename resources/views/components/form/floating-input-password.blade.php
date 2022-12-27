@props(["name","value"=>""])

<x-form.floating-input-wrapper>
    <input type="password" name="{{ $name }}" id="{{ $name }}" value="{{ old($name,$value) }}" placeholder="{{ $name }}"
        {{ $attributes->merge(["class"=>"form-control"]) }} required />
    {{ $slot }}
    <x-form.error :name="$name" />
</x-form.floating-input-wrapper>
