<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 4)->get();
        $transactions = Transaction::all();

        return view('admin.transactions.index', compact('transactions', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaction::create($request->all());
        return back()->with('success', 'Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view('admin.transactions.receipt', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getInvoice(Request $request)
    {
        $invoices = Invoice::where('user_id', $request->id)->get();

        return view('admin.transactions.invoice', compact('invoices'))->render();
    }

    public function getAmount(Request $request)
    {
        $amount = InvoiceDetail::where('invoice_id', $request->id)->sum('amount');

        return response()->json($amount);
    }

    public function report($period)
    {
        $now = Carbon::now();

        if ($period == "Daily") {
            $transactions = Transaction::whereDay('created_at', date('d'))->get();
        } elseif ($period == "Weekly") {
            $transactions = Transaction::whereBetween('created_at', [
                $now->startOfWeek(Carbon::SUNDAY)->format('Y-m-d'),
                $now->endOfWeek(Carbon::SATURDAY)->format('Y-m-d'),
            ])->get();
        } elseif ($period == "Monthly") {
            $transactions = Transaction::whereMonth('created_at', date('m'))->get();
        } elseif ($period == "Annually") {
            $transactions = Transaction::whereYear('created_at', date('Y'))->get();
        }

        return view('admin.transactions.sales.index', compact('transactions', 'period'));
    }
}
