<select class="form-control" name="parent">
    <option value="0">Select</option>
    @foreach ($options as $option)
    <option {{ $isSelected( $option->{$value} ) ? 'selected="selected"' : '' }} value="{{ $option->{$value} }}">
        {{ $option->{$label} }}
    </option>
    @endforeach
</select>
