<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDiagnosisController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $services = Service::all();
        $diagnoses = Diagnosis::where('user_id', Auth::id())->get();
        return view('customers.diagnosis.index', compact('users', 'services','diagnoses'));
    }
}
