@if($customer->exists ?? '')
<form method="POST" action="{{ route('customers.update', $customer ?? '') }}">
    @method('put')
 @else
 <form method="POST" action="/customers">
@endif
     @csrf
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input id="cpf" name="cpf" type="text"
        value="{{ old('cpf', $customer->cpf ?? '') }}"
            class="form-control @error('cpf') is-invalid @enderror"
        >
        @error('cpf')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name" type="text"
            value="{{ old('name', $customer->name ?? '') }}"
            class="form-control @error('name') is-invalid @enderror"
        >
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="surname">Surname</label>
        <input id="surname" name="surname" type="text"
            value="{{ old('surname', $customer->surname ?? '') }}"
            class="form-control @error('surname') is-invalid @enderror"
        >
        @error('surname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text"
            value="{{ old('phone', $customer->phone ?? '') }}"
            class="form-control @error('phone') is-invalid @enderror"
        >
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
