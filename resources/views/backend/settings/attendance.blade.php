@extends('layouts.backend-settings')



@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    
       
        
        <form action="{{route('settings.attendance')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Checkin Time</label>
                <div class="col-lg-9">
                    <input type="time" value="{{$settings->checkin_time}}"name="checkin" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Checkout Time</label>
                <div class="col-lg-9">
                    <input type="time" value="{{$settings->checkout_time}}" class="form-control" name="checkout">
                </div>
                
            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary submit-btn">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection

