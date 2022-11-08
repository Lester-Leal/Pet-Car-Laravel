<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        return view('customers.settings.index', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
        if ($request->password != '') {
            $data['password'] = Hash::make($request->password);
        }

        User::find(Auth::id())->update($data);
        return back()->with('success', 'Updated successfully');
    }
}
