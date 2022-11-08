<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\InvoiceDetail;

class AdminInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('role', 4)->get();
        $invoices = Invoice::all();
        $services = Service::all();

        return view('admin.invoices.index', compact('users', 'invoices', 'services'));
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
        $invoice_number = rand(1000, 9999);
        $invoice_number = '#INVOICE' . $invoice_number;
        if ($request->service_id != null) {
            $invoice = Invoice::create(['invoice_number' => $invoice_number, 'user_id' => $request->user_id, 'due_date' => $request->due_date, 'status' => 0])->id;

            for ($i = 0; $i < count($request->service_id); $i++) {

                InvoiceDetail::create([
                    'invoice_id' => $invoice,
                    'amount' => $request->price[$i],
                    'service_id' => $request->service_id[$i]
                ]);
            }

            return back()->with('success', 'Added successfully');
        } else {
            return back()->with('error', 'Please select atleast one service');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
