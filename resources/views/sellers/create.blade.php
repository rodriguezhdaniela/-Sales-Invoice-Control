@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Seller</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/sellers">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>>
            @endif
            <form method="POST" action="{{ route('sellers.store') }}">
                @csrf
                <div class="form-group">
                    <label for="type_id">Type ID:</label>
                    <select name="type_id" id="type_id" class="form-control" value="{{ old('type_id') }}">
                        <option value="Card ID" selected>Card ID</option>
                        <option value="Foreign ID">Foreign ID</option>
                        <option value="Passport">Passport</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="personal_id">ID Number:</label>
                    <input type="text" class="form-control" id="personal_id" name="personal_id" placeholder="number id" value="{{ old('personal_id') }}">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{ old('name') }}>
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" value="{{ old('last_name') }}">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="address" value="{{ old('address') }}">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="phone number" value="{{ old('phone_number') }}">
                    <label for="e_mail">E-mail:</label>
                    <input type="text" class="form-control" id="e_mail" name="e_mail" placeholder="e-mail address" value="{{ old('e_mail') }}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
