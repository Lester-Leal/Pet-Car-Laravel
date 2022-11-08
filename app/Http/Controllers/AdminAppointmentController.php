<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
 
class AdminAppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index', compact('appointments'));
    }

    public function update(Request $request, $id)
    {
        Appointment::find($id)->update($request->only('status'));
        return back()->with('Updated successfully');
    }
}
