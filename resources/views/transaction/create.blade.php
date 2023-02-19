@extends('layouts.app')
@section('content')
    <div>
        <h3>New Transaction</h3>
        <form action="/transaction/store" method="POST">
            @csrf

            <div class="mb-3">
                <label for="client_name" class="form-label">Client</label>
                <select class="form-select" aria-label="Default select example" onchange="onSelectClient(this)" name="client_id">
                    <option selected>Select Client</option>
                    @foreach ($clients as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="permit" class="form-label">Permit</label>
                <select class="form-select" aria-label="Default select example" onchange="onSelectPermit(this)"
                    name="permit_id">
                    <option selected>Select Permit</option>
                    @foreach ($permits as $p)
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" name="submit" value="Save" class="btn btn-primary">
        </form>
    </div>

    <script type="text/javascript">
        function onSelectClient(e) {
            console.log("client:", e.options.selectedIndex);
        }

        function onSelectPermit(e) {
            console.log("permit:", e.options.selectedIndex);
        }
    </script>
@endsection
