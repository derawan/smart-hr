@extends('layouts.auth')

@section('content')
@if(session('login_error'))
<div class="bg-danger p-3 rounded text-center mb-2 text-sm text-white">
    {{session('login_error')}}
</div>
@endif
<form action="{{route('login')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Alamat Email</label>
        <input name="email" type="text" value="{{old('email') ?? 'admin@admin.com'}}" class="form-control @error('email') border-danger @enderror">
    </div>
    @error('email')
    <div class="bg-danger text-sm text-white p-3 rounded mb-2">
        {{$message}}
    </div>
    @enderror
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label>Password</label>
            </div>
            <div class="col-auto">
                <a class="text-muted" href="{{route('forgot-password')}}">
                    Lupa password?
                </a>
            </div>
        </div>
        <input name="password" class="form-control  @error('password') border-danger @enderror" value="admin" type="password">
        
    </div>
    @error('password')
    <div class="bg-danger text-sm text-white p-3 rounded mb-2">
        {{$message}}
    </div>
    @enderror
    <div class="form-group text-center">
        <button class="btn btn-primary w-100 p-15" type="submit">{{__("Login")}}</button>
    </div>
    <div class="account-footer">
        <p><a href="{{route('register')}}">{{__("Mendaftar")}}</a></p>
    </div>
</form>
@endsection