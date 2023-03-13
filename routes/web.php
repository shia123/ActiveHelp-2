<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Models\Appointment;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $doctors = Group::with('user')
        ->get();

    return view('welcome', compact('doctors'));
});

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
Route::middleware('auth', 'doctor.auth')->group(function () {
    Route::get('/doctor-home', function () {
        $user = Auth::user();
        $appointments = Appointment::where('doctor', $user->id)
            ->where('status', '!=', 'cancelled')->get();
        return view('doctor.home', compact('appointments'));
    });
    Route::post('/cancel-appointment-by-doctor/{id}', [App\Http\Controllers\DoctorController::class, 'cancelAppoinmentByDoctor'])->name('cancelAppoinmentByDoctor');
    Route::post('/manage-profile/doctor', [App\Http\Controllers\DoctorController::class, 'editDoctorProfile'])->name('editDoctorProfile');
    Route::post('/approve-appointment-by-doctor/{id}', [App\Http\Controllers\DoctorController::class, 'approveAppoinmentByDoctor'])->name('approveAppoinmentByDoctor');
});
Route::middleware('auth', 'admin.auth')->group(function () {
    Route::get('/admin-home', function () {

        return view('admin.home');
    });
    Route::get('/doctors-list', [App\Http\Controllers\AdminController::class, 'doctorsList'])->name('doctorsList');
    Route::post('/manage-doctor/{id}', [App\Http\Controllers\AdminController::class, 'manageDoctor'])->name('manageDoctor');
    Route::post('/manage-profile/admin', [App\Http\Controllers\AdminController::class, 'editProfileAdmin'])->name('editProfileAdmin');
});
Auth::routes();
Route::middleware('auth', 'patient.auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/appointment', [App\Http\Controllers\HomeController::class, 'appointment'])->name('appointment');
    Route::post('/cancel-appointment/{id}', [App\Http\Controllers\HomeController::class, 'cancelAppointment'])->name('cancelAppointment');
    Route::get('/myappointment', [App\Http\Controllers\HomeController::class, 'myappointment'])->name('myappointment');
    Route::post('/manage-profile', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');

    Route::get('/group/create', 'GroupController@create_form');

    Route::post('/group/create', 'GroupController@create');

    Route::get('/group/join', 'GroupController@join_form');

    Route::post('/group/join', 'GroupController@join');

    Route::get('/group/{id}', 'GroupController@show_group');

    Route::get('/group/edit/{id}', 'GroupController@edit');

    Route::post('/group/update/{id}', 'GroupController@update');

    Route::delete('/group/delete/{id}', 'GroupController@delete');

    Route::get('/group/members_list/{id}', 'GroupController@members_list');

    Route::get('/remove_user/{id}/{user_id}', 'GroupController@remove_user');

    Route::post('/send_message/{id}', 'MessageController@send_message');

    Route::get('/show_messages/{id}', 'MessageController@show_messages');
});
