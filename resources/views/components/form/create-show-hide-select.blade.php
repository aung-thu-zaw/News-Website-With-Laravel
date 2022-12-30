@props(["name"])
<x-form.input-wrapper>
    {{ $slot }}
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Status</option>
        <option value="show">
            Show
        </option>
        <option value="hide">
            Hide
        </option>
    </select>

    <x-form.error :name="$name" />
</x-form.input-wrapper>
