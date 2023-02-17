{{-- @extends('layouts.master')
@section('content') --}}
@extends('layouts.app')
@section('content')
    <h3>Edit Client</h3>
    <div class="container-sm">
        <form action="/client/{{ $client->id }}" method="POST">
            @method('put')
            @csrf
            <label for="client_id" class="form-label">ID</label>
            <input type="text" name="client_id" class="form-control" id="client_id" placeholder=""
                value="{{ $client->client_id }}"><br />

            <label for="client_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="client_name" placeholder="Name"
                value="{{ $client->client_name }}" /><br />

            <label for="client_email_1" class="form-label">Email 1</label>
            <input type="text" class="form-control" name="client_email_1" placeholder="Email 1"
                value="{{ $client->client_email_1 }}" /><br />

            <label for="client_email_2" class="form-label">Email 2</label>
            <input type="text" class="form-control" name="client_email_2" placeholder="Email 2"
                value="{{ $client->client_email_2 }}" /><br />

            <label for="client_mobile" class="form-label">Mobile Phone</label>
            <input type="text" class="form-control" name="client_mobile" placeholder="Mobile Phone"
                value="{{ $client->client_mobile }}" /><br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
@endsection
