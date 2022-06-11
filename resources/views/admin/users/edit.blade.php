@extends('layouts.admin')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
<div class="card-body">
    <form action="{{route('users.update' , $user->id)}}"  method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"
            ><i class="bx bx-user"></i
          ></span>
          <input
            type="text"
            class="form-control"
            id="basic-icon-default-fullname"
            placeholder="John Doe"
            aria-label="John Doe"
            aria-describedby="basic-icon-default-fullname2"
            name="name"
            value="{{ old('name') ?? $user->name}}"
          />
        </div>
      </div>
      {{-- <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">city</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class="bx bx-buildings"></i
          ></span>
          <input
            type="text"
            id="basic-icon-default-company"
            class="form-control"
            placeholder="ACME Inc."
            aria-label="ACME Inc."
            aria-describedby="basic-icon-default-company2"
            name="city"
            value="{{ old('name') ?? $user->city}}"
          />
        </div> --}}
        <div class="mb-3">
        <label class="form-label" for="basic-icon-default-city">city</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-city" class="input-group-text"
            ><i class="bx bx-buildings"></i
          ></span>
        <select name="city" id="city" >
            <option value="{{$user->city}}" selected  >{{$user->city}}</option>
            <option value="{{0}}" >user</option>
            <option value="1">admin</option>
        </select>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-email">Email</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
          <input
            type="text"
            id="basic-icon-default-email"
            class="form-control"
            placeholder="john.doe"
            aria-label="john.doe"
            aria-describedby="basic-icon-default-email2"
          />
          <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
        </div>
        <div class="form-text">You can use letters, numbers & periods</div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-phone">Phone No</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-phone2" class="input-group-text"
            ><i class="bx bx-phone"></i
          ></span>
          <input
            type="text"
            id="basic-icon-default-phone"
            class="form-control phone-mask"
            placeholder="658 799 8941"
            aria-label="658 799 8941"
            aria-describedby="basic-icon-default-phone2"
          />
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-message">Message</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-message2" class="input-group-text"
            ><i class="bx bx-comment"></i
          ></span>
          <textarea
            id="basic-icon-default-message"
            class="form-control"
            placeholder="Hi, Do you have a moment to talk Joe?"
            aria-label="Hi, Do you have a moment to talk Joe?"
            aria-describedby="basic-icon-default-message2"
          ></textarea>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Send</button>
    </form>
  </div>
    </div>
    </div>
<!-- / Content -->

@endsection