<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Permit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Transaction::all();
        // $data = DB::table("clients, permits, transactions")
        // ->select("clients.name", "permits.name")
        // ->where("clients.id", "=", "transactions.client_id")
        // ->where("permits.id", "=", "transactions.permit_id")
        // ->get();

        $data = DB::table('clients as A')
        ->join('transactions as C', 'A.id', '=', 'C.client_id')
        ->join('permits as B', 'B.id', '=', 'C.permit_id')
        ->select('C.id', 'A.name as client_name', 'B.name as permit_name')
        ->get();

        // $sql = 'SELECT A.name, B.name FROM clients as A, permits as B, transactions as C WHERE A.id = C.client_id AND B.id = C.permit_id';

        // $data = DB::select($sql);
        
        return view("transaction.index", compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $permits = Permit::all();
        return view('transaction.create', compact(['clients','permits' ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaction::create($request->except(['_token', 'submit']));
        return redirect('/transaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}