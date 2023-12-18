<?php

namespace App\Http\Controllers;

use App\Models\Appointent;
use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function showappointment()
    {
        $appointments = Appointent::paginate(10)->all();
        return view('admin.showappointment',compact('appointments'));
    }
    public function approve($id)
    {
        $appointment = Appointent::find($id);
        $appointment->status = "approved";
        $appointment->save();
        return redirect()->back()->with('success','Appointment Approved');
    }
    public function cancel($id)
    {
        $appointment = Appointent::find($id);
        $appointment->status = "cancelled";
        $appointment->save();
        return redirect()->back()->with('success','Appointment Approved');
    }
}
