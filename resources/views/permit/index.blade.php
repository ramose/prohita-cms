@extends('layouts.app')
@section('content')
    

    <div>

        <div class="d-flex justify-content-between">

            <p>
                <a href="/client/create" class="btn btn-primary">Create Permit</a>
            </p>
        </div>






        <table class="table">
            <tr>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($client as $w)
                <tr>
                    <td>{{ $w->name }}</td>
                    <td><a href="/permit/{{ $w->id }}/edit" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="/permit/{{ $w->id }}" method="POST">
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
