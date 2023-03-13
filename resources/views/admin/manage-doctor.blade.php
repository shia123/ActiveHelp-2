@extends('layouts.app')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
@section('content')


<?php

?>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Manage Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-evenly align-items-center">
                <button type="button" class="btn btn-danger" onClick='manageDoctor("rejected")'>Reject</button>
                <button type="button" class="btn btn-primary" onClick='manageDoctor("approved")'>Approve</button>
            </div>

        </div>
    </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control   " name="email" required autocomplete="email" autofocus>
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Username</label>
                    <div class="col-md-6">
                        <input id="username" type="username" class="form-control   " name="username" autofocus>
                    </div>
                </div>
                <br />
                <div class="form-group row">
                    <label for="role" class="col-md-4 col-form-label text-md-right">Phone</label>
                    <div class="col-md-6">
                        <input id="phone" type="phone" class="form-control   " name="phone" required autocomplete="phone" autofocus>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onClick="editProfile()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="container">
        <div class="row">
         
            <div class="col-md-12">
                <h5>Manage Doctors</h5>
            </div>
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User</th>
                        <th>Date Register</th>
                        <th>Action</th>
                    </tr>


                    @foreach($doctors as $doctors)
                    <tr>
                        <td>{{$doctors->username}}</td>
                        <td>{{$doctors->email}}</td>
                        <td>{{$doctors->phone}}</td>
                        <td>{{$doctors->role==2?'Doctor':'Patient'}}</td>
                        <td>{{$doctors->created_at}}</td>
                        <td>
                            <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="getUserData({{$doctors}})">

                                EDIT
                            </button>
                            @if ($doctors->role==2 && $doctors->status=='pending')
                            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop" onClick="getUserId('{{$doctors->id}}')">
                                MANAGE
                            </button>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

</div>


<?php  ?>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf-8">
    var userId = '';

    function getUserId(id) {
        userId = id
        console.log(userId)
    }

    function getUserData(data) {
        userId = data.id;
        document.getElementById("email").value = data.email;
        document.getElementById("username").value = data.username;
        document.getElementById("phone").value = data.phone;

    }

    function editProfile() {
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]');
        fetch('/manage-profile/admin', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken.content
                },
                cache: "default",
                body: JSON.stringify({
                    id: userId,
                    email: document.getElementById("email").value,
                    username: document.getElementById("username").value,
                    phone: document.getElementById("phone").value,
                })
            }).then((res) => {
                if (res.status == 200) {
                    window.location.reload();
                }
            })
            .catch(err => console.log(err));
    }

    function manageDoctor(status) {
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]');
        fetch(`/manage-doctor/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken.content
                },
                cache: "default",
                body: JSON.stringify({
                    status: status
                })
            }).then((res) => {
                if (res.status == 200) {
                    window.location.reload();
                }
  
            })
            .catch(err => console.log(err));
    }
</script>