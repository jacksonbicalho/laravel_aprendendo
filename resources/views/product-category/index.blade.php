@extends('layouts.app')

@section('content')

<h2>{{ __('Product categories') }}</h2>

<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Parent</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($productCategories as $productCategory)
    <tr>
      <td>{{ $productCategory->id }}</td>
      <td>{{ $productCategory->name }}</td>
      <td>{{ $productCategory->parent->name ?? null }}</td>
    </tr>
@endforeach
  </tbody>
</table>

{{ $productCategories->links() }}

@endsection
