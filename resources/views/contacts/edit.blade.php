@extends('contacts.layout')
  
@section('content')


<div class="container">

<div class="d-flex justify-content-center">
<div  class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="create">
<div class="row">
<div class="col-lg-10">
   
        
        <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('home') }}"> Retour</a>
        </div>
    
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oups! </strong> Error <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('contacts.update',$item->id) }}" method="POST">
@csrf
        @method('PUT')
        <div class="row">
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>First name</strong>
                <input type="text" name="id" value="{{ $item->id }}" class="form-control">
            </div>
        </div>
    </div>
  
     <div class="row">
        
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>First name</strong>
                <input type="text" name="firstname" value="{{ $item->firstname }}" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Last name</strong>
                <input type="text" name="lastname" value="{{ $item->lastname }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" value="{{ $item->email }}"class="form-control">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Phone</strong>
                <input type="text" name="phone" value="{{ $item->phone }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Location</strong>
                <input type="text" name="location" value="{{ $item->location }}" class="form-control">
            </div>
        </div>
    </div>  
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
   
</form>

</div></div></div></div>
@endsection