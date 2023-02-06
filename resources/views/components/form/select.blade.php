@props(["name","categories"=>"","id"=>"","subcategories"=>"","role"=>"","languages"=>""])
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

    @elseif($subcategories && $name)

    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Category</option>

        @foreach ($subcategories as $subcategory)
        <option value="{{ $subcategory->id }}" {{ $subcategory->id==$id ? "selected":"" }}>
            {{$subcategory->name}} ({{ $subcategory->category->name }})
        </option>
        @endforeach
    </select>
    @elseif($languages && $name)

    <select class="form-select" name="{{ $name }}" id="" required>
        <option value="" selected disabled>Select Language</option>

        @foreach ($languages as $language)
        <option value="{{ $language->id }}" {{ $language->id==$id ? "selected":"" }}>
            {{$language->name}} ({{ $language->short_name }})
        </option>
        @endforeach
    </select>
    @endif

    <x-form.error :name="$name" />

</x-form.input-wrapper>