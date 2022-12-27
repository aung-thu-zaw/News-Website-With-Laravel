@props(["type"=>"text","name","value"=>"","id"=>""])

<x-form.input-wrapper>
    {{ $slot }}
    @if ($type=="file")
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control" id="{{ $id }}"
        placeholder="{{ $name }}" />
    @else
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control"
        placeholder="{{ $name }}" required />
    @endif
    <x-form.error :name="$name" />
</x-form.input-wrapper>
