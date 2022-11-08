<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\Schedule;
use App\Models\Transaction;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role',4)->count();
        $patients = Pet::all()->count();
        $appointments = Appointment::where('status', 1)->count();
        $appointment = Appointment::all();
        //$schedules = Schedule::where('status', 0)->count();
        $total_paid = Transaction::all();
        return view('dashboard', compact('users','patients', 'appointments','appointment' ,'total_paid'));
    }


}
