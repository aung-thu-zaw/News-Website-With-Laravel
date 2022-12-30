@props(["name","advertisement"=>"","category"=>"","subcategorynav"=>"","subcategoryhome"=>""])
<x-form.input-wrapper>
    {{ $slot }}

    @if ($advertisement && $name)
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Status</option>
        <option value="show" {{ $advertisement==="show" ? "selected" :""}}>
            Show
        </option>
        <option value="hide" {{ $advertisement==="hide" ? "selected" :""}}>
            Hide
        </option>
    </select>
    @endif


    @if ($category && $name)
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Status</option>
        <option value="show" {{ $category==="show" ? "selected" :""}}>
            Show
        </option>
        <option value="hide" {{ $category==="hide" ? "selected" :""}}>
            Hide
        </option>
    </select>
    @endif

    @if ($subcategorynav && $name)
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Status</option>
        <option value="show" {{ $subcategorynav==="show" ? "selected" :""}}>
            Show
        </option>
        <option value="hide" {{ $subcategorynav==="hide" ? "selected" :""}}>
            Hide
        </option>
    </select>
    @endif

    @if ($subcategoryhome && $name)
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Status</option>
        <option value="show" {{ $subcategoryhome==="show" ? "selected" :""}}>
            Show
        </option>
        <option value="hide" {{ $subcategoryhome==="hide" ? "selected" :""}}>
            Hide
        </option>
    </select>
    @endif
    <x-form.error :name="$name" />
</x-form.input-wrapper>
