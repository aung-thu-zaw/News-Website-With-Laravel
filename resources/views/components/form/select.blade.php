@props(["name","categories"=>"","id"=>""])
<x-form.input-wrapper>
    {{ $slot }}
    @if ($categories && $id && $name)
    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $id===$category->id
            ?"selected":"" }}>
            {{$category->name}}
        </option>
        @endforeach
    </select>

    @elseif($categories && $name)

    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Category</option>

        @foreach ($categories as $category)
        <option value="{{ $category->id }}">
            {{$category->name}}
        </option>
        @endforeach
    </select>
    @endif
    <x-form.error :name="$name" />




</x-form.input-wrapper>
