<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerScheduleController extends Controller
{
    //
    public function index()
    {
        $schedules = Schedule::where('user_id', Auth::id())->get();
        return view('customers.schedules.index', compact('schedules'));
    }
}
