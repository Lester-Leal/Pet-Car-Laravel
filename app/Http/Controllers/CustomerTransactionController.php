<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerTransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        return view('customers.transactions.index', compact('transactions'));
    }
}
