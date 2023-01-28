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
$useruuid = Auth::user()->uuid;

if ($useruuid == '2022' || $useruuid == '0') {
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


                        @foreach($list_sched as $list_scheds)
                        <tr>
                            <td>{{$list_scheds->name}}</td>
                            <td>{{$list_scheds->email}}</td>
                            <td>{{$list_scheds->phone}}</td>
                            <td>

                                @if($list_scheds->doctor==1)
                                Karen N. Balanza
                                @elseif($list_scheds->doctor==2)
                                Noemi Angeline E. Jularbal
                                @elseif($list_scheds->doctor==3)
                                Teresita H. Sison
                                @elseif($list_scheds->doctor==4)
                                Wilson S. Tibayan
                                @elseif($list_scheds->doctor==5)
                                Mary Gomez
                                @elseif($list_scheds->doctor==6)
                                Genna Hipolito
                                @elseif($list_scheds->doctor==7)
                                Gwendolyn Cayad
                                @elseif($list_scheds->doctor==8)
                                Jovelyn Tangalin
                                @elseif($list_scheds->doctor==9)
                                Silva Tsuchiya
                                @elseif($list_scheds->doctor==10)
                                Beatriz Inumpa
                                @endif
                            </td>
                            <td>{{$list_scheds->date}}</td>
                            <td>{{$list_scheds->time}}</td>
                            <td>
                                <form method="post" action="cancel-appointment/{{$list_scheds->id}}">
                                    @csrf
                                    <button class="btn btn-danger " type="submit">
                                        Cancel Appointment
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

@endsection