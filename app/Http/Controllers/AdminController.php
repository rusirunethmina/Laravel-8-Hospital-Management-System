<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function doctor_view()
    {
        $doctor = Doctor::all();
        return view('admin.pages.doctor.show',compact('doctor'));
    }

    public function doctor_add(Request $request)
    {

        $request->validate([
            'dname' => 'required',
            'pname' => 'required',
            'specilaity' => 'required',
            'roomno' => 'required',
            'file' => 'required',
        ]);

        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->file->move('images/doctor', $imagename);

        $doctor->image = $imagename;
        $doctor->name = $request->dname;
        $doctor->phone = $request->pname;
        $doctor->specialty = $request->specilaity;
        $doctor->room = $request->roomno;
        $doctor->save();

        $alert = array(
            'message' => 'Doctor Added Successfully!!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($alert);
    }
}
