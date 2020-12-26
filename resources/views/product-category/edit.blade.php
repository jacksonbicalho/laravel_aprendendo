@extends('layouts.app')

@section('content')

    @include('product-category.form', [
        'productCategory' => $productCategory,
        'productCategories' => $productCategories
    ])

@endsection
