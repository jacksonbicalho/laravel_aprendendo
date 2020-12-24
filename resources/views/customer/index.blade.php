@extends('layouts.app')

@section('content')


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($customers as $customer)
    <tr>
      <td>{{ $customer->cpf }}</td>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->surname }}</td>
      <td>{{ $customer->phone }}</td>
    </tr>
@endforeach
  </tbody>
</table>


@endsection