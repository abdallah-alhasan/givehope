@extends('layouts.app')

@section('content')
{{-- new --}}

<style>


@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
</style>




<section class="h-100 h-custom gradient-custom-2 site-section">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Title</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                          <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev2">First name</label>
                        </div>

                      </div>
                      <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                          <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev3">Last name</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Position</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev4">Position</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                        <div class="form-outline">
                          <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplev5">Bussines Arena</label>
                        </div>

                      </div>
                      <div class="col-md-6">

                        <select class="select">
                          <option value="1">Employees</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                        </select>

                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-lg-6 bg-indigo text-white">
                  <div class="p-5">
                    <h3 class="fw-normal mb-5">Contact Details</h3>

                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Street + Nr</label>
                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea3" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea3">Additional Information</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4 pb-2">

                        <div class="form-outline form-white">
                          <input type="text" id="form3Examplea4" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea4">Zip Code</label>
                        </div>

                      </div>
                      <div class="col-md-7 mb-4 pb-2">

                        <div class="form-outline form-white">
                          <input type="text" id="form3Examplea5" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea5">Place</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea6" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea6">Country</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-5 mb-4 pb-2">

                        <div class="form-outline form-white">
                          <input type="text" id="form3Examplea7" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea7">Code +</label>
                        </div>

                      </div>
                      <div class="col-md-7 mb-4 pb-2">

                        <div class="form-outline form-white">
                          <input type="text" id="form3Examplea8" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Examplea8">Phone Number</label>
                        </div>

                      </div>
                    </div>

                    <div class="mb-4">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea9">Your Email</label>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-start mb-4 pb-3">
                      <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label text-white" for="form2Example3">
                        I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                        site.
                      </label>
                    </div>

                    <button type="button" class="btn btn-light btn-lg"
                      data-mdb-ripple-color="dark">Register</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-9 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">SIGN UP</p>

                  <form  method="POST" enctype="multipart/form-data" action="{{ route('register') }}" class="mx-1 mx-md-4">
                    @csrf
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">{{ __('Name') }}</label>
                        <input type="text" id="form3Example1c" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">{{ __('Email Address') }}</label>
                        <input type="email" id="form3Example3c" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="phonenumber">phoneNumber</label>
                        <input type="text" id="phonenumber" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" required autocomplete="phonenumber" autofocus/>
                        @error('phonenumber')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="city_id">City</label>
                        <select class="form-select" aria-label="Default select example" name="city_id">
                          <option selected>select your city</option>
                          @foreach ($cities as $city)
                          <option value="{{$city->id}}">{{$city->name}}</option>
                          @endforeach
                      </select>
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="logo">Charity Logo</label>
                          <input type="file" id="logo" class="form-control" name="logo"/>
                        </div>
                      </div>



                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="image">Identification papers</label>
                        <input type="file" id="image" class="form-control" name="image"/>
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">{{ __('Password') }}</label>
                        <input type="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">{{ __('Confirm Password') }}</label>
                        <input type="password" id="form3Example4cd" class="form-control" name="password_confirmation" required autocomplete="new-password"/>

                      </div>
                    </div>



                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">{{ __('Register') }}</button>
                    </div>


                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- new --}}


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="phonenumber" class="col-md-4 col-form-label text-md-end">phoneNumber</label>
                            <div class="col-md-6">
                                <input id="phonenumber" type="text"
                                    class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" required autocomplete="phonenumber" autofocus>
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="city_id" class="col-md-4 col-form-label text-md-end">City</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="city_id">
                                <option selected>select your city</option>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">Identification papers</label>
                        <div class="col-md-6">
                        <input class="form-control" type="file" id="image" name="image">
                        </div>
                      </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> --}}
                {{-- </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
