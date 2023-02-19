{{-- @extends('layouts.master')
@section('content') --}}
@extends('layouts.app')
@section('content')
    <h3>Edit Transaction</h3>
    <div class="container-sm">
        <form action="/transaction/{{ $data->id }}" method="POST">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="client_id" class="form-label">Client</label>
                <select class="form-select" id="client-select" aria-label="Default select example" onchange="onSelectClient(this)" name="client_id">
                    @foreach ($clients as $c)
                        <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="permit" class="form-label">Permit</label>
                <select class="form-select" id="permit-select" aria-label="Default select example" onchange="onSelectPermit(this)"
                    name="permit_id">
                    @foreach ($permits as $p)
                        <option value="{{ $p->id }}" selected>{{ $p->name }}</option>
                    @endforeach
                </select>
            </div>
            

            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </form>
    </div>

    <script type="text/javascript">
        document.getElementById('client-select').value={{ $data->client_id }};
        document.getElementById('permit-select').value={{ $data->permit_id }};
    </script>
@endsection
