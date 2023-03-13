<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Make an Appointment</h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                    @endif
                    <form method="post" v-on:submit='book_appointment' action="{{ route('appointment') }}">
                        @csrf

                        <div class="col-12">
                            <input type="hidden" name="id" class="form-control" placeholder="ID" value="<?php echo $userId = auth()->id(); ?>">
                        </div><br>
                        <div class="col-12">
                            <input type="text" name="name" class="form-control" placeholder="Full name" value="<?php echo $name = Auth::user()->username; ?>">
                        </div>
                        <div class="col-12">
                            <input type="text" name="email" class="form-control" placeholder="Email address" value="<?php echo $email = Auth::user()->email; ?>">
                        </div>
                        <div class="col-12">
                            <input type="text" name="phone" class="form-control" placeholder="Phone number" value="<?php echo $phone = Auth::user()->phone; ?>">
                        </div>
                        <div class="col-12">
                            <select name="doctor" id="doctor" class="custom-select form-control">
                                @foreach($doctors as $doctors)
                                <option value="{{$doctors->admin_id}}">{{$doctors->user->username}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="date" name="date" class="form-control">
                        </div><br>
                        <div class="col-12">
                            <label for="time">Set a time for the appointment:</label>
                            <input type="time" id="time" name="time" min="08:00" max="17:00" required> <br>
                            Office hours are 8am to 5pm
                        </div><br>

                        <div class="col-12">
                            <div class="col-md-0 text-center">
                                <div style="color:white;">
                                    <button class="btn btn-dark" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>