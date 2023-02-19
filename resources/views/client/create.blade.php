@extends('layouts.app')
@section('content')
<div>
<h3>Add Client</h3>
<form action="/client/store" method="POST">
    @csrf
    

      <div class="mb-3">
        <label for="client_name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="" required>
      </div>

      <div class="mb-3">
        <label for="email_1" class="form-label">Email 1</label>
        <input type="text" name="email1" class="form-control" id="email_1" placeholder="" required>
      </div>

      <div class="mb-3">
        <label for="email_2" class="form-label">Email 2</label>
        <input type="text" name="email2" class="form-control" id="email_2" placeholder="">
      </div>

      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="phone" class="form-control" id="mobile" placeholder="" required>
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="">
      </div>

    <input type="submit" name="submit" value="Save" class="btn btn-primary">
</form>
</div>
@endsection