<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.add_doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $doctor = new Doctor();
        $image = $request->image;
        $imageName = time().".".$image->getClientOriginalName();
        $request->image->move('images',$imageName);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room_no;
        $doctor->image = $imageName;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::find($id);
        return view('admin.show_doctor',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return view('admin.edit_doctor',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $doctor = Doctor::find($id);
        //unlink old doctor's image
        $image_path = "images/".$doctor->image;
        if(file_exists($image_path)){
            unlink($image_path);
        }

        $image = $request->image;
        $imageName = time().".".$image->getClientOriginalName();
        $request->image->move('images',$imageName);
        $doctor->image = $imageName;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room_no;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Updated Successfully');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back()->with('message','Doctor Deleted Successfully');
    }
}
