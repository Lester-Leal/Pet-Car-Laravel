<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Json;

class CustomerAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        $appointments_per_day = $setting->appointments_per_day;
        $number = $appointments_per_day;


        $appoints = Appointment::whereDay('created_at', date('d'))->count();
        $appoint = Appointment::where('user_id', Auth::id())->whereDay('created_at', date('d'))->where('status', 0)->count();
        $remaining = $number - $appoints;

        $status1 = ($appoint > 0) ? '0' : 1;
        $status = ($appoints < $number) ? "1" : 0;

        $appointments = Appointment::where('user_id', Auth::id())->get();
        return view('customers.appointments.index', compact('appointments', 'status', 'status1', 'remaining'));
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
        //
        $setting = Setting::first();
        $appointments_per_day = $setting->appointments_per_day;

        $appointments = Appointment::whereDay('created_at', date('d'))->count();

        if ($appointments < $appointments_per_day) {
            $data = $request->all();
            $data['user_id'] = Auth::id();
            $data['status'] = 1;
            Appointment::create($data);
            return back()->with('success', 'Added successfully');
        } else {
            return back()->with('error', 'Appointment are not accepted at the moment');
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
    public function calendar()
    {

        return view('customers.appointments.calendar');
    }

    public function getCalendar()
    {
        $appointments = Appointment::all();
        $data = array();
        foreach ($appointments as  $appointment) {
            $data[] = array(
                'title' => $appointment->title,
                'start' => date('Y-m-d H:m', strtotime($appointment->start)),
                'end' => date('Y-m-d H:m', strtotime($appointment->end))
            );
        }

        return response()->json($data);
    }
}
