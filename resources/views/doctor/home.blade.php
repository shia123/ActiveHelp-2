@extends('layouts.app')

@section('content')
<div class="container">
    <?php
    $userid = Auth::user()->uuid;
    $name = Auth::user()->username;


    ?>
    <div class="row">

        <div class="col-md-12">

            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#editModal">
                Edit Profile
            </button>
        </div>
    </div>
    <?php  ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-12 text-center">
                    <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: 40px; width: 854px; border: 0px; color:white;">
                        {{ __('Dashboard') }}
                    </div>
                </div>
                <div style="background-image: url(https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); color:white" ;>
                    <div class="container-fluid">

                        <div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <h5>Manage Appointments</h5>
                                </div>
                                <div class="col-md-12">
                                    <table style="color:white;">
                                        <tr>
                                            <th style="width:10rem">Patient Name</th>
                                            <th style="width:18rem">Patient Email</th>
                                            <th style="width:10rem">Patient Phone</th>
                                            <th style="width:15rem">Date Register</th>
                                            <th style="width:10rem">Action</th>
                                        </tr>


                                        @foreach($appointments as $appointments)
                                        <tr>
                                            <td>{{$appointments->name}}</td>
                                            <td>{{$appointments->email}}</td>
                                            <td>{{$appointments->phone}}</td>
                                            <td>{{$appointments->created_at}}</td>
                                            <td class="d-flex">
                                                @if ($appointments->status!='approve')
                                                <form method="post" action="cancel-appointment-by-doctor/{{$appointments->id}}">
                                                    @csrf
                                                    <button class="btn btn-dark" type="submit">
                                                        Cancel
                                                    </button>
                                                </form>
                                                <form method="post" action="approve-appointment-by-doctor/{{$appointments->id}}">
                                                    @csrf
                                                    <button class="btn btn-dark" type="submit">
                                                        Approve
                                                    </button>
                                                </form>
                                                @endif
                                                @if ($appointments->status=='approve')
                                                <span>Approve</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->


    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $userId = Auth::user()->id; ?>">
                        </div><br>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control   " name="email" required autocomplete="email" autofocus value="<?php echo $email = Auth::user()->email; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Doctor Code</label>
                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control   " name="code" required autofocus value="<?php echo $code = Auth::user()->getCode(); ?>">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Clinic</label>
                            <div class="col-md-6">
                                <input id="clinic" type="text" class="form-control   " name="clinic" required autofocus value="<?php echo $clinic = Auth::user()->clinic; ?>">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Schedule</label>
                            <div class="col-md-6">

                                <textarea id="schedule" class="form-control   " name="schedule" required autofocus><?php echo $schedule = Auth::user()->schedule; ?></textarea>

                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Full name</label>
                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control   " name="username" autofocus value="<?php echo $name = Auth::user()->username; ?>">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Phone</label>
                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control   " name="phone" required autocomplete="phone" autofocus value="<?php echo $phone = Auth::user()->phone; ?>">
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                        <button type="button" class="btn btn-primary" onClick="editProfile()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        @endsection
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" charset="utf-8">
            function editProfile() {
                var csrfToken = document.head.querySelector('meta[name="csrf-token"]');

                fetch('/manage-profile/doctor', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken.content
                        },
                        cache: "default",
                        body: JSON.stringify({
                            id: document.getElementById("id").value,
                            email: document.getElementById("email").value,
                            username: document.getElementById("username").value,
                            phone: document.getElementById("phone").value,
                            code: document.getElementById("code").value,
                            clinic: document.getElementById("clinic").value,
                            schedule: document.getElementById("schedule").value,
                        })
                    }).then((res) => {
                        if (res.status == 200) {
                            window.location.reload();
                        }
                    })
                    .catch(err => console.log(err));
            }
        </script>