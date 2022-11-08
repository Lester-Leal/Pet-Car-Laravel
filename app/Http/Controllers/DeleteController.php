<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Diagnosis;
use App\Models\Invoice;
use App\Models\Schedule;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
   //
   public function delete(Request $request)
   {

      $page = $request->page;
      $id = $request->id;

      if ($page == "User") {
         User::find($id)->delete();
      } elseif ($page == "Category") {

         Category::find($id)->delete();
      } elseif ($page == "Service") {

         Service::find($id)->delete();
      } elseif ($page == "Pet") {

         Pet::find($id)->delete();
      } elseif ($page == "Diagnosis") {

         Diagnosis::find($id)->delete();
      } elseif ($page == "Schedule") {

         Schedule::find($id)->delete();
      } elseif ($page == "Invoice") {

         Invoice::find($id)->delete();
      } elseif ($page == "Transaction") {

         Transaction::find($id)->delete();
      } elseif ($page == "Appointment") {

         Appointment::find($id)->delete();
      } else {

         return back();
      }

      return redirect()->back()->with('success', 'Deleted successfully');
   }
}
