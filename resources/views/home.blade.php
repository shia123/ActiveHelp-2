@extends('layouts.app')

@section('content')
<div class="container">
    <?php 
        $userid= Auth::user()->uuid;
        $name= Auth::user()->username;
        
        if($userid =='0'){
    ?>                 
    <div class="row">
        <div class="col-md-12">
            
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  Book an appointment
</button>
        </div>
    </div>
    <?php }?> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-12 text-center">
                <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: 40px; width: 854px; border: 0px; color:white;">
                {{ __('Dashboard') }}</div></div>
                <div style="background-image: url(https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); color:white";>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            $userid = Auth::user()->uuid;
                            $name = Auth::user()->username;

                            if ($userid == '2022' || $userid == '9832') {
                            ?>

                            <a class="btn btn-dark create-gc" href="/group/create">Create a chat room</a>

                            <?php } ?>

                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <a class="btn btn-dark" href="/group/join">
                                <div style="color:white;">Join a chat room </div></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                            <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: px; width: 820px; border: 0px; color:white;">
                                <div class="card-header">
                                Private Chat & Community Chat</div></div>

                                <div class="card-body">
                                    @foreach($groups as $group)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4> <a href="/group/{{$group->id}}" style="color: green;"> {{$group->name}} </a> </h4>
                                        </div>
                                        <?php
                                        $userid = Auth::user()->uuid;
                                        if ($userid == '2022' || $userid == '9832') {
                                        ?>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5>Code:</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="text-danger">{{$group->code}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div> <br>
                                    <p>
                                        @if ($group->messages()->latest()->first())
                                        <span class="text-danger">{{$group->messages()->latest()->first()->user->username}}</span> <small>{{$group->messages()->latest()->first()->message}}</small>
                                        @endif
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>                              
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('booking.appointment')
            </div>

        </div>
    </div>
</div>
@endsection