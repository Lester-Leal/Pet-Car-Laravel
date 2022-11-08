<?php

namespace App\Http\Controllers;

use App\Models\Catchment;
use App\Models\CatchmentDetail;
use App\Models\Project;
use App\Models\User;
use App\Models\UserProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Builder\Function_;

class UserController extends Controller
{
    //
    public function index(){
        $projects = Project::all();
        $users = User::all();
        return view('users', compact('users','projects'));
    }

    public function store(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role_id'=>$request->role_id,
            'password'=> Hash::make($request->password)
        ];

        $user_id = User::create($data)->id;
        $project_id = $request->project_id;

        for ($i=0; $i < count($project_id); $i++) { 
            UserProject::create(['user_id'=>$user_id, 'project_id'=>$project_id[$i]]);
        }
        return redirect()->back()->with('success', 'Added successfully');
    }

    public function update(Request $request){
       $data = $request->only('name','email','phone','role_id');

       User::find($request->id)->update($data);
       return redirect()->back()->with('success', 'Updated successfully');
    }

    
}
