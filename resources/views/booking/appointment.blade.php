<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Make an Appointment</h2>
            </div>
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
                    </div>
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
                            <option value="1">Karen N. Balanza</option>
                            <option value="2">Noemi Angeline E. Jularbal</option>
                            <option value="3">Teresita H. Sison</option>
                            <option value="4">Wilson S. Tibayan</option>
                            <option value="5">Mary Gomez</option>
                            <option value="6">Genna Hipolito</option>
                            <option value="7">Gwendolyn Cayad</option>
                            <option value="8">Jovelyn Tangalin</option>
                            <option value="9">Silva Tsuchiya</option>
                            <option value="10">Beatriz Inumpa</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="time">Choose a time for your meeting:</label>
                        <input type="time" id="time" name="time" min="08:00" max="17:00" required>Office hours are 8am to 5pm
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary " type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>