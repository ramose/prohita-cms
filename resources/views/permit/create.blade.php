@extends('layouts.app')
@section('content')
<div>
<h3>Create Permit</h3>
<form action="/permit/store" method="POST">
    @csrf

      <div class="mb-3">
        <label for="client_name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="" required>
      </div>

    <input type="submit" name="submit" value="Save" class="btn btn-primary">
</form>
</div>
@endsection