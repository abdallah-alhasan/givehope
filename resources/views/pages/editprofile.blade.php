@extends('layouts.master')

@section('content')
<style>


<<<<<<< HEAD
<div class="container" style="padding-top:8% ">
=======
.ftco-navbar-light {
    background: #343a40 !important;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
    top: 0px  !important;


}


</style>

<div class="container" style="padding:8%;margin-top:100px">
>>>>>>> 567a31227a7a7ea11ba4fdad6bbc696acc8395f8
    <form action="{{ route('pages.updateProfile', $user->id)}}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
    <div class="form-group ">
      <label for="exampleFormControlInput1">Charitie Name:</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control" >
    </div>

    <div class="form-group ">
      <label for="exampleFormControlInput1">Email:</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control" >
    </div>

    {{-- <div class="form-group ">
      <label for="exampleFormControlInput1">city:</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control" >
    </div> --}}
    <div class="form-group ">
    {{-- <select class="form-select form-control" aria-label="Default select example" name="city">
        <option selected>Choose your city</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select> --}}
      {{-- <input class="form-control" type="hidden" name="city_id" value="{{$user->city_id}}" disabled> --}}

    </div>
    <div class="form-group ">
      <label for="exampleFormControlInput1">Phone Number:</label>
      <input type="number" name="phonenumber" value="{{ $user->phonenumber }}" class="form-control" >
    </div>


    {{-- <div class="form-group">
      <label for="exampleFormControlTextarea1">Email :</label>
      <textarea  type="email" class="form-control" name="email" value="{{ $user->email }}"  ></textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">City :</label>
      <textarea  type="text" class="form-control" name="city" value="{{ $user->city}}"  ></textarea>
    </div>

    <div class="form-group ">
        <label for="exampleFormControlInput1">Charitie Name:</label>
        <input type="mobile" name="phonenumber" value="{{ $user->phonenumber }}" class="form-control"  >
      </div> --}}

    {{-- <div class="form-group">
        <label for="exampleFormControlFile1">Movie photo :</label>
        <input type="file" name="phonenumber" value="{{ $user->phonenumber}}" class="form-control-file" >
      </div> --}}

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        {{-- <a  href="{{url('pages.profile')}}" class="btn btn-primary">Back</a> --}}
      </div>
  </form>
</div>
<br><br><br>


@endsection
