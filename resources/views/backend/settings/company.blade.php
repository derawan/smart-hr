@extends('layouts.backend-settings')

@section('styles')
    <!-- Select2 css -->
    <link href="{{ asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
    
        
        <form action="{{route('settings.company')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Perusahaan <span class="text-danger">*</span></label>
                        <input class="form-control" name="company_name" type="text" value="{{$settings->company_name}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kontak Person</label>
                        <input class="form-control" name="contact_person" value="{{$settings->contact_person}}" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="address" value="{{$settings->address}}" type="text">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>Negara</label>
                        <input type="text" name="country" value="{{$settings->country}}" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>Kota</label>
                        <input class="form-control" name="city" value="{{$settings->city}}" type="text">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>Propinsi</label>
                        <input type="text" name="province" value="{{$settings->province}}" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input class="form-control" name="postal_code" value="{{$settings->postal_code}}" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="{{$settings->email}}" type="email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input class="form-control" name="phone" value="{{$settings->phone}}" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No. HP</label>
                        <input class="form-control" name="mobile" value="{{$settings->mobile}}" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Fax</label>
                        <input class="form-control" name="fax" value="{{$settings->fax}}" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Url</label>
                        <input class="form-control" name="website_url" value="{{$settings->website_url}}" type="text">
                    </div>
                </div>
            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary submit-btn">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<!-- Select2 JS -->
<script src="{{ asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/select2.init.js')}}"></script>
@endsection