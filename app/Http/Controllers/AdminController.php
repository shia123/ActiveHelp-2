<?php

namespace App\Http\Controllers;

use App\Mail\DoctorApproveMail;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class AdminController extends Controller
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

    public function manageDoctor($id, Request $request)
    {

        $formData = array(
            'status'        =>  $request->input('status'),
        );
        if ($request->input('status') == 'approved') {
            $doctor =  User::where('id', $id)->first();
            Mail::to($doctor->email)->send(new DoctorApproveMail($doctor->email));
            Group::create([
                'name' => $doctor->username,
                'code' => Str::random(10),
                'admin_id' => $doctor->id
            ]);
        }
        $cancel = User::where('id', $id)->update($formData);

        $doctors = User::whereIn('role', [2, 3])
            ->where('status', '!=', 'rejected')
            ->orderBy('created_at', 'desc')
            ->get();
        return redirect()->back()->with(compact('doctors'));
    }

    public function editProfile(Request $request)
    {

        $formData = array(
            'username'        =>  $request->input('username'),
            'email'        =>  $request->input('email'),
            'phone'        =>  $request->input('phone'),
        );
        $cancel = User::where('id', $request->input('id'))->update($formData);

        $doctors = User::whereIn('role', [2, 3])
            ->where('status', '!=', 'rejected')
            ->orderBy('created_at', 'desc')
            ->get();
        return redirect()->back()->with(compact('doctors'));
    }
}
