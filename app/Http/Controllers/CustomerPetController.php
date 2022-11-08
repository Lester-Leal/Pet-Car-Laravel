<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerPetController extends Controller
{
    public function index()
    {
        $pets = Pet::where('user_id', Auth::id())->get();
        return view('customers.pets.index', compact('pets'));
    }
}
