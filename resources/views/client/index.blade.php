<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>
    
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
        <th>Mobile</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($client as $w)
    <tr>
        <td>{{ $w->client_name }}</td>
        <td>{{ $w->client_email_1 }}</td>
        <td>{{ $w->client_email_2 }}</td>
        <td>{{ $w->client_mobile }}</td>
        <td><a href="/client/{{ $w->id }}/edit" class="btn btn-secondary">Edit</a></td>
        <td><form action="/client/{{ $w->id }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form></td>
    </tr>    
    @endforeach   
</table>
</div>
</x-app-layout>
{{-- @stop --}}