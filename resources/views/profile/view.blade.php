@extends('admin.master')
@section('admin')
     <!-- jquery.3..5.1 -->

<div class="page-content">
<div class="container-fluid">
<div class="row">
    <div class="card p-4">
        <h5 class="card-header bg-dark text-white "><b>Profile</b></h5>
        <div class="card-body"><!-- Begin Card Body -->
            <div class="container">
                <div class="row">
                  <div class="col-md-auto align-self-start">
                   <div class="card-body text-center">
                    <img class="rounded-circle avatar-xl" src="{{ (!empty($user->profile_image))? url('uploads/profile/images/'.$user->profile_image):url('uploads/profile/images/no_image.jpg') }}">
                    </div>
                    <h5 class="my-3"><b>{{ $user->name }}</b> </h5>
                      <p class="text-muted mb-1">Full Stack Developer</p>
                      <p class="text-muted mb-4">Malta</p>
                      <div class="d-flex justify-content-center mb-2">
                      <a href="{{route('profile.edit')}}" class="btn btn-primary m-2 p-2">Edit Profile</a>
                      </div>
                    </div>
                  </div>

                  <!-- Profile Card Information Section -->
                  <div class="col align-self-end">
                  <div class="card-body text-left">
                  <div class="card-body">

                  <!-- Profile Name -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Name:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->name}} </p>
                  </div></div>
                  <hr>

                  <!-- Profile Phone Number -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Phone Number:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->phone}}</p>
                  </div></div>
                  <hr>

                  <!-- Profile Username -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Username:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->username}}</p>
                  </div></div>
                  <hr>

                  <!-- Profile Email Address -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Email Addrerss:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email}}</p>
                  </div></div>
                  <hr>

                  <!-- Created At -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Account Created:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->created_at}}</p>
                  </div></div>
                  <hr>

                  <!-- Email Verification -->
                  @if(isset($user->email_verified_at))
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Email Verification:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->email_verified_at}}</p>
                  </div></div>
                  <hr>
                  @else

                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">User: {{$user->name}}</p>
                  </div>
                  <div class="alert alert-danger" role="alert">
                  <p class="mb-0">This email has not been verified yet!</p>
                  </div></div>
                  <hr>
                  @endif

                 <!-- Account Updated Last -->
                  <div class="row">
                  <div class="col-sm-3">
                  <p class="mb-0">Account Created:</p>
                  </div>
                  <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$user->created_at}}</p>
                  </div></div>
                  </div></div>

                  </div> <!-- Profile Card Information Section -->
                  </div> <!-- End Row -->
                  </div>
                   </div> <!-- End Card Body -->
      </div>
@endsection
