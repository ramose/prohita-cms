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
                            <input type="submit" value="Delete" class="btn btn-danger show-alert-delete-box">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>

@endsection
