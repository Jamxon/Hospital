<?php

namespace App\Http\Controllers;

use App\Models\Appointent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
class HomeController extends Controller
{
    public function redirect(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        if (Auth::id()){
            if (Auth::user()->usertype == '0'){
                $doctors = Doctor::all();
                return view('user.home',compact('doctors'));
            }
            else{
                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        if (Auth::id()){
            return redirect('/home');
        }
        else {
            $doctors = Doctor::all();
            return view('user.home', compact('doctors'));
        }
    }

    public function appointment(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'doctor'=>'required',
            'date'=>'required',
            'message'=>'required',
        ]);
        try {
            $user = new Appointent();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->doctor = $request->doctor;
            $user->date = $request->date;
            $user->message = $request->message;
            $user->status = "In progress"; // 0 = pending, 1 = accepted, 2 = rejected, 3 = completed
            $user->user_id = Auth::id();
            $user->save();
        }
        catch (\Exception $exception){
            return redirect()->back()->with('error','Something Went Wrong');
        }
        return redirect()->back()->with('success','Appointment Request Sent Successfully');
    }
    public function myappointment()
    {
        if (Auth::id()){
            $appointments = Appointent::where('user_id',Auth::id())->get();
            return view('user.myappointment',compact('appointments'));
        }
        else{
            return redirect()->back();
        }
    }
    public function cancel_appoint($id)
    {
        $data = Appointent::find($id);
        $data->delete();
        return redirect()->back()->with('success','Appointment Cancelled Successfully');
    }
}
