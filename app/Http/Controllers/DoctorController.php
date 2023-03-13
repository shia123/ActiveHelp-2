<?php

namespace App\Http\Controllers;

use App\Mail\ApproveAppointmentMail;
use App\Mail\CancelAppoinmentMail;
use App\Models\Appointment;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    //
    public function doctorsList()
    {

        // $userId = auth()->id();

        $doctors = User::whereIn('role', [2, 3])
            ->where('status', '!=', 'rejected')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.manage-doctor', compact('doctors'));
    }

    // public function manageDoctor($id, Request $request)
    // {

    //     $formData = array(
    //         'status'        =>  $request->input('status'),
    //     );
    //     if ($request->input('status') == 'approved') {
    //         $doctor =  User::where('id', $id)->first();
    //         Mail::to($doctor->email)->send(new DoctorApproveMail($doctor->email));
    //         Group::create([
    //             'name' => $doctor->username,
    //             'code' => Str::random(10),
    //             'admin_id' => $doctor->id
    //         ]);
    //     }
    //     $cancel = User::where('id', $id)->update($formData);

    //     $doctors = User::whereIn('role', [2, 3])
    //         ->where('status', '!=', 'rejected')
    //         ->orderBy('created_at', 'desc')
    //         ->get();
    //     return redirect()->back()->with(compact('doctors'));
    // }

    public function editDoctorProfile(Request $request)
    {


        $formData = array(
            'username'        =>  $request->input('username'),
            'email'        =>  $request->input('email'),
            'phone'        =>  $request->input('phone'),
            'clinic'        =>  $request->input('clinic'),
            'schedule'        =>  $request->input('schedule'),
        );
        if ($request->input('code')) {
            Group::where('admin_id', $request->input('id'))->update([
                'code' => $request->input('code')
            ]);
        }
        User::where('id', $request->input('id'))->update($formData);
        return redirect()->back();
    }

    public function cancelAppoinmentByDoctor($id)
    {


        $formData = array(
            'status'        =>  'cancelled',
        );
        $appointmentDetails = Appointment::where('id', $id)->first();
        Appointment::where('id', $id)->update($formData);
        $userId = auth()->id();
        $appointments = Appointment::where('doctor', $userId)
            ->where('status', 'active')->get();
        Mail::to($appointmentDetails->email)->send(new CancelAppoinmentMail($appointmentDetails->email));


        return redirect()->back()->with(compact('appointments'));
    }

    public function approveAppoinmentByDoctor($id)
    {


        $formData = array(
            'status'        =>  'approve',
        );
        $appointmentDetails = Appointment::where('id', $id)->first();
        Appointment::where('id', $id)->update($formData);
        $userId = auth()->id();
        $appointments = Appointment::where('doctor', $userId)
            ->where('status', 'active')->get();
        Mail::to($appointmentDetails->email)->send(new ApproveAppointmentMail($appointmentDetails->email));


        return redirect()->back()->with(compact('appointments'));
    }
}
