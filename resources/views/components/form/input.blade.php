@props(["type"=>"text","name","value"=>"","id"=>"","required"=>""])

<x-form.input-wrapper>
    {{ $slot }}
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control" id="{{ $id }}"
        placeholder="{{ $name }}" {{ $required }} />
    <x-form.error :name="$name" />
</x-form.input-wrapper>
