@extends('layouts.app')
@section('content')
<div class="container">

@if (session('error'))
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> {{ session('error') }}</strong>
  </div>
@endif	

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@endif   
<form action="{{route('postRegister')}}" method='POST'>
    @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">UserName</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="text" name="username" placeholder="Enter the username.." type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="password" name="password" placeholder="Enter the password.." type="password" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="confirm_password" class="col-4 col-form-label">Confirm Password</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="password_confirmation" name="password_confirmation" placeholder="Confirm your password.." type="password" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-mail-reply-all"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Enter the Email ID.." type="email" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="dob" class="col-4 col-form-label">Date Of Birth</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="dob" name="dob" placeholder="Date of Birth.." type="date" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="city" class="col-4 col-form-label">City</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div> 
        <input id="city" name="city" placeholder="Enter the City.." type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
@endsection