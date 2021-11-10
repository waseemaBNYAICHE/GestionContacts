@extends('contacts.layout')
  
@section('content')


<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2> Show Contact</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('home') }}"> Back </a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $contact ->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First name:</strong>
                {{ $contact ->firstname}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last name:</strong>
                {{ $contact ->lastname}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Email:</strong>
                {{ $contact ->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Phone:</strong>
                {{ $contact ->phone}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Location:</strong>
                {{ $contact ->location}}
            </div>
        </div>
    </div>
    
</div>

  
@endsection