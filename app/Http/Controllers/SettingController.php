<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $number = Setting::first();

        return view('admin.settings.index', compact('number'));
    }

    public function store(Request $request)

    {
        $number = Setting::first();
        if ($number != null) {
            Setting::first()->update($request->only('appointments_per_day'));
        } else {
            Setting::create($request->only('appointments_per_day'));
        }


        return back()->with('Updated successfully');
    }
}
