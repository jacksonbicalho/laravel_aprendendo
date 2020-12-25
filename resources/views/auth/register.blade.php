@extends('layouts.app')

@section('content')
    @include('user.form', ['user' => $user ?? ''])
@endsection
