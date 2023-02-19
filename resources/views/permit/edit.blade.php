{{-- @extends('layouts.master')
@section('content') --}}
@extends('layouts.app')
@section('content')
    <h3>Edit Permit</h3>
    <div class="container-sm">
        <form action="/permit/{{ $permit->id }}" method="POST">
            @method('put')
            @csrf
            <label for="permit_id" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" id="permit_id" placeholder=""
                value="{{ $permit->id }}"><br />

            <label for="permit_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name"
                value="{{ $permit->name }}" /><br />

            

            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
@endsection
