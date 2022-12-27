@props(["type"=>"text","name","value"=>""])

<x-form.floating-input-wrapper>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control" id="{{ $name }}"
        placeholder="{{ $name }}" required />
    {{ $slot }}
    <x-form.error :name="$name" />
</x-form.floating-input-wrapper>
