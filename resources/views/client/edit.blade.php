{{-- @extends('layouts.master')
@section('content') --}}
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Clients') }}
      </h2>
  </x-slot>

<h3>Edit Client</h3>
<form action="/client/{{ $client->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="client_id" placeholder="ID" value="{{ $client->client_id }}"/><br>

    <div class="mb-3">
        <label for="client_id" class="form-label">ID</label>
        <input type="text" name="client_id" class="form-control" id="client_id" placeholder="" value="{{ $client->client_id }}">
      </div>

    <input type="text" name="client_name" placeholder="Name" value="{{ $client->client_name }}"/><br>
    <input type="text" name="client_email_1" placeholder="Email 1" value="{{ $client->client_email_1 }}"/><br>
    <input type="text" name="client_email_2" placeholder="Email 2" value="{{ $client->client_email_2 }}"/><br>
    <input type="text" name="client_mobile" placeholder="Mobile Phone" value="{{ $client->client_mobile }}"/><br>
    <input type="submit" name="submit" value="Update">
</form>
</x-app-layout>
{{-- @stop --}}