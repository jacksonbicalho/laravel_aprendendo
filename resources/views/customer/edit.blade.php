@extends('layouts.app')

@section('content')

    @include('customer.form', ['customer' => $customer])

@endsection
