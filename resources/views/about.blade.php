<div class="container">

<div class="section-title">
  <h2>About</h2>
  <p>{{Auth::user()->username}}</p>
</div>

<div class="row">
  <div class="col-lg-4" data-aos="fade-right">
    <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
  </div>
  <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
    <div class="row">
      <div class="col-lg-6">
        <ul>
          <li><i class="icofont-rounded-right"></i> <strong>Username:</strong> {{Auth::user()->username}}</li>
          <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> {{$users->email}}</li>
          <li><i class="icofont-rounded-right"></i> <strong>Date of Birth:</strong> {{$users->dob}}</li>
          <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$users->city}}</li>
        </ul>
        <button type="button" style="float:right" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal1-{{ Auth::user()->id }}"><i class="bx bx-edit"></i>Edit</button>
            <br>

<!-- Modal Content-->
<form class="forms-sample" action="{{route('editprofile',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
<div class="modal fade" id="myModal1-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="form-group row">
<input type="hidden" class="form-control" id="id" name ="id" value="{{ Auth::user()->id}}" required  >
           
<label for="text" class="col-4 col-form-label">UserName</label> 
<div class="col-8">
<div class="input-group">
<div class="input-group-prepend">
  <div class="input-group-text">
    <i class="fa fa-user"></i>
  </div>
</div> 
<input id="text" name="username" placeholder="Enter the username.." type="text" value="{{Auth::user()->username}}" class="form-control" required="required">
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
<input id="email" name="email" value="{{$users->email}}" placeholder="Enter the Email ID.." type="email" required="required" class="form-control">
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
<input id="dob" name="dob" value="{{$users->dob}}" placeholder="Date of Birth.." type="date" class="form-control" required="required">
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
<input id="city" name="city" value="{{$users->city}}"placeholder="Enter the City.." type="text" class="form-control">
</div>
</div>
</div> 
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>
</form>  
    </div>

    </div>
  </div>
</div>

</div>