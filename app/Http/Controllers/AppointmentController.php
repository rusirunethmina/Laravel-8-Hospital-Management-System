<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function appointment_add(Request $request)
    {
        if (Auth::id()) {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'date' => 'required',
                'doctor' => 'required',
                'phone' => 'required',
                'message' => 'required',
            ]);

            $data = new Appointment();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->date = $request->date;
            $data->doctor = $request->doctor;
            $data->number = $request->phone;
            $data->message = $request->message;
            $data->status = 'In progress';
            if (Auth::id()) {
                $data->user_id = Auth::user()->id;
            }

            $data->save();

            $alert = array(
                'message' => 'Appointment Create Successfully!!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($alert);
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function appointment_user()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoinment = Appointment::where('user_id', $userid)->get();
            return view('user.pages.user_appoinmnent', compact('appoinment'));
        } else {
            return redirect()->back();
        }
    }

    public function appointment_cancle($id)
    {
        // Appointment::where('id',$id)->delete();

        $data = Appointment::find($id);
        $data->delete();

        $alert = array(
            'message' => 'Appointment Cancle Successfully!!',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($alert);
    }

    public function appointment_show()
    {
        $appoinment = Appointment::all();
        return view('admin.pages.appoinment.admin_appoinmnent_show', compact('appoinment'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();

        $alert = array(
            'message' => 'Appointment approved Successfully!!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($alert);
    }

    public function cancle($id)
    {
        $data = Appointment::find($id);
        $data->status = 'cancle';
        $data->save();

        $alert = array(
            'message' => 'Appointment cancle Successfully!!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($alert);
    }
}
