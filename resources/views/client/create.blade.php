@extends('layouts.app')
@section('content')
<div>
<h3>Add Client</h3>
<form action="/client/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="client_id" class="form-label">ID</label>
        <input type="text" name="client_id" class="form-control" id="client_id" placeholder="">
      </div>

      <div class="mb-3">
        <label for="client_name" class="form-label">Name</label>
        <input type="text" name="client_name" class="form-control" id="client_name" placeholder="">
      </div>

      <div class="mb-3">
        <label for="client_email_1" class="form-label">Email 1</label>
        <input type="text" name="client_email_1" class="form-control" id="client_email_1" placeholder="">
      </div>

      <div class="mb-3">
        <label for="client_email_2" class="form-label">Email 2</label>
        <input type="text" name="client_email_2" class="form-control" id="client_email_2" placeholder="">
      </div>

      <div class="mb-3">
        <label for="client_mobile" class="form-label">Mobile</label>
        <input type="text" name="client_mobile" class="form-control" id="client_mobile" placeholder="">
      </div>

    {{-- <input type="text" name="client_id" placeholder="ID" value=""/><br> 
    <input type="text" name="client_name" placeholder="Name"/><br>    
    <input type="text" name="client_email_1" placeholder="Email 1"/><br>
    <input type="text" name="client_email_2" placeholder="Email 2"/><br>
    <input type="text" name="client_mobile" placeholder="Mobile Phone"/><br> --}}
    <input type="submit" name="submit" value="Save" class="btn btn-primary">
</form>
</div>
@endsection