<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;
use App\Models\Appointment;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get group where user is present
        $groups = auth()->user()->group_member;

        return view('home', compact('groups'));
    }

    public function appointment(Request $request)
    {
        $schedule = appointment::where('date', $request->date)
            ->where('time', $request->time)
            ->where('status', 'active')
            ->first();


        if ($schedule) {

            return redirect()->back()->with('error', 'Sorry this schedule is not Available');
        } else {


            $data = new appointment;

            $data->uuid = $request->id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->doctor = $request->doctor;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->status = 'active';

            $data->save();
            return redirect()->back()->with('message', 'Appointment request successful. We will contact with you soon');
        }
    }

    public function myappointment()
    {

        $userId = auth()->id();
        $list_sched = appointment::where('status', 'active')
            ->where('uuid', $userId)
            ->get();
        // echo $userId;
        return view('booking.my_appointment', compact('list_sched'));
    }
    public function cancelAppointment($id)
    {

        // $uuid = auth()->uuid();
        $userId = auth()->id();
        $formData = array(
            'status'        =>  'cancelled',
        );
        $cancel = appointment::where('id', $id)->update($formData);
        $userId = auth()->id();
        $list_sched = appointment::where('status', 'active')
            ->where('uuid', $userId)
            ->get();
        // echo $userId;

        return redirect()->back()->with(compact('list_sched'));
    }
}
