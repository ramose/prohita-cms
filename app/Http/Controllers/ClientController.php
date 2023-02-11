<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view("home");
    }

    public function index(){
        $client = Client::all();
        return view("client.index", compact(['client']));
    }

    public function create()
    {
       return view('client.create'); # code...
    }
    
    public function store(Request $request)
    {
    //    dd($request->all()); 
       Client::create($request->except('_token','submit'));
       return redirect('/client');
    }

    public function edit($id){
        // dd($id);
        $client = Client::find($id);
        // dd($client);
        // session()->flash('warning', 'Settings saved successfully.');
        return view('client.edit', compact(['client']));
        
    }

    public function update($id, Request $request){
        $client = Client::find($id);
        $client->update($request->except('_token','submit'));
        return redirect('/client');
        
    }
    public function destroy($id){
        $client = Client::find($id);
        $client->delete();
        // $client->update($request->except('_token','submit'));
        return redirect('/client');
        
    }
}