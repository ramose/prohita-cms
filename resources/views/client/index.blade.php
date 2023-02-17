@extends('layouts.app')
@section('content')
    

    <div>

        <div class="d-flex justify-content-between">

            <p>
                <a href="/client/create" class="btn btn-primary">Add Client</a>
            </p>
        </div>






        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email 1</th>
                <th>Email 2</th>
                <th>Phone</th>
                <th>Address</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($client as $w)
                <tr>
                    <td>{{ $w->name }}</td>
                    <td>{{ $w->email1 }}</td>
                    <td>{{ $w->email2 }}</td>
                    <td>{{ $w->phone }}</td>
                    <td>{{ $w->address }}</td>
                    <td><a href="/client/{{ $w->id }}/edit" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="/client/{{ $w->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
