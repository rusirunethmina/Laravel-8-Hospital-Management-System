<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Doctor;
use Illuminate\Support\Facades\Notification;
use App\Notifications\MyFirstNotification;

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

    public function emailview($id)
    {
         $details = Appointment::find($id);
         return view('admin.pages.appoinment.mail',compact('details'));
    }

    public function emailSend(Request $request, $id)
    {
        $data = Appointment::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actionText,
            'actionurl' => $request->actionUrl,
            'endpart' => $request->endPart
        ];

        Notification::send($data,new MyFirstNotification($details));

        $alert = array(
            'message' => 'Send Mail Successfully!!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($alert);
    }
}
