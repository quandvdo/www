<div class="form-container px-3 py-3">
    <h4 class="black bold mt-3 px-4 pb-2 text-center">Book this tour</h4>
    <form id="sidebar-form" class="px-xl-3 px-lg-3 px-3" action="{{route('booking.store')}}" method="post">
        @csrf
        <p>For multiple person, please use comma (,) to separate each guest</p>
        <div class="form-group text-center">
            <label for="inputname">Your Name</label>
            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name"
                   placeholder="John Doe" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <label for="inputmail">Email Adress</label>
            <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email"
                   placeholder="johndoe@gmail.com" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <label for="quantity">Number of Participant</label>
            <input type="text" class="form-control {{$errors->has('quantity') ? 'is-invalid' : ''}}" id="spinner"
                   name="quantity" value="1">
            @if($errors->has('quantity'))
                <div class="invalid-feedback">
                    {{$errors->first('quantity')}}
                </div>
            @endif
        </div>
        <div class="form-group text-center departure">
            <label for="datepicker">Departure Date</label>
            <div class="input-group">
                <input type="text" id="datepicker" name="activity_date" placeholder="Choose your Date"
                       class="form-control {{$errors->has('activity_date') ? 'is-invalid' : ''}}" value="{{ old('activity_date') }}">
                <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                </div>
            </div>
            @if($errors->has('activity_date'))
                <div class="invalid-feedback">
                    {{$errors->first('activity_date')}}
                </div>
            @endif
        </div>
        <div class="form-group text-center">
            <label for="quantity">Special Note</label>
            <textarea class="form-control {{$errors->has('notes') ? 'is-invalid' : ''}}" name="notes"
                      placeholder="Special note or request" >{{ old('notes') }}</textarea>
            @if($errors->has('notes'))
                <div class="invalid-feedback">
                    {{$errors->first('notes')}}
                </div>
            @endif
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="hidden" name="tour_id" value="{{$tour->id}}">
                <button type="submit" class="btn col-sm-12 my-2 btn-primary">Book Now</button>
            </div>
        </div>
    </form>
</div>