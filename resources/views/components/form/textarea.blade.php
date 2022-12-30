@props(["name","value"=>""])
<x-form.input-wrapper>
    {{ $slot }}
    <textarea class="form-control editor" name="{{ $name }}" cols="30" rows="10"  value="{{ old($name,$value) }}">{!! $value !!}</textarea>
    <x-form.error name="{{ $name }}" />
</x-form.input-wrapper>
