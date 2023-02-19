@extends('layouts.app')
@section('content')
    

    <div>

        <div class="d-flex justify-content-between">

            <p>
                <a href="/permit/create" class="btn btn-primary">Create Permit</a>
            </p>
        </div>






        <table class="table">
            <tr>
                <th>Name</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($permit as $w)
                <tr>
                    <td>{{ $w->name }}</td>
                    <td><a href="/permit/{{ $w->id }}/edit" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="/permit/{{ $w->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="submit" value="Delete" class="btn btn-danger show-alert-delete-box">
                            {{-- <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button> --}}
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


