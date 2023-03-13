@extends('layouts.app')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #5aa84c;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #5aa84c;
    }
</style>
@section('content')


<?php

?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Appointment</h5>
            </div>
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>


                    @foreach($list_sched as $list_sched)
                    <tr>
                        <td>{{$list_sched->name}}</td>
                        <td>{{$list_sched->email}}</td>
                        <td>{{$list_sched->phone}}</td>
                        <td>
                            {{$list_sched->user->username}}
                        </td>
                        <td>{{$list_sched->date}}</td>
                        <td>{{$list_sched->time}}</td>
                        <td>
                            @if($list_sched->status=='active')
                            <form method="post" action="cancel-appointment/{{$list_sched->id}}">
                                @csrf
                                <button class="btn btn-dark" type="submit">
                                    Cancel Appointment
                                </button>
                            </form>
                            @endif
                            @if ($list_sched->status=='approve')
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

<?php  ?>

@endsection