@extends('layouts.app')

@section('content')


<form method="POST" action="/customers">
    @csrf

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input id="cpf" name="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror">
        @error('cpf')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="surname">Surname</label>
        <input id="surname" name="surname" type="text" class="form-control @error('surname') is-invalid @enderror">
        @error('surname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror">
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection