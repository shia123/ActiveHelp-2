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
            
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Booking An Appointment
</button>
        </div>
    </div>
    <?php }?> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                        <?php 
                            $userid= Auth::user()->uuid;
                            $name= Auth::user()->username;
                            
                            if($userid =='2022' || $userid =='9832'){
                        ?>

                            <a class="btn btn-primary create-gc" href="/group/create">Create a chat room</a>

                        <?php }?>    

                        </div>
                        <div class="col-md-6" style="text-align: right;">
                            <a class="btn btn-light" href="/group/join">Join a chat room</a>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">Private Chat & Community Chat</div>

                                <div class="card-body">
                                    @foreach($groups as $group)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4> <a href="/group/{{$group->id}}" style="color: black;"> {{$group->name}} </a> </h4>
                                        </div>
                                        <?php 
                                            $userid= Auth::user()->uuid;
                                            if($userid =='2022' || $userid =='9832'){
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

                                        <?php }?>
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
