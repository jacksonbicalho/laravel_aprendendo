@if($productCategory->exists ?? '')
<form method="POST" action="{{ route('product-categories.update', $productCategory ?? '') }}">
    @method('put')
 @else
 <form method="POST" action="/product-categories">
@endif
    @csrf

    <x-form-select
        empty="Selecione"
        :options="$productCategories"
        label="name"
        value="id"
        :selected="['options', 'parent_id']"
    />

    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name" type="text"
            value="{{ old('name', $productCategory->name ?? '') }}"
            class="form-control @error('name') is-invalid @enderror"
        >
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
