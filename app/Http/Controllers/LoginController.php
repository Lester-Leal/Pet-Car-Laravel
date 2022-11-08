<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = $request->only('email', 'password');
        $login = Auth::attempt($data);

        if ($login) {
            if (in_array(Auth::user()->role, [1, 2, 3])) {
                return redirect()->route('dashboard');
            } else {

                if (Auth::user()->customer_status == 1) {
                    return redirect()->route('customer.services');
                } else {
                    Auth::logout();
                    return back()->with('error', 'Your account is not active, please contact the administrator');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
