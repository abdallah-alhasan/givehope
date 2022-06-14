
@extends('layouts.master')

@section('content')
<style>
    .ftco-navbar-light {
    background: transparent !important;
    position: fixed;
    color: #000 !important;
    left: 0;
    right: 0;
    z-index: 3;
    top: 0;
}
.ftco-navbar-light .navbar-nav > .nav-item > .nav-link {
    color: #000;
    opacity: 1 !important;
    }
    .navbar-dark .navbar-nav .nav-link {
    color: #000 !important;

}

.navbar-dark .navbar-brand {
    color: #000 !important;
}
.navbar-dark .navbar-toggler {
    color: #000 !important;
    color: #000 !important;
}



.p_filter_widgets a:before {
    content: "";
    height: 10px;
    width: 10px;
    border-radius: 50%;
    border: 1px solid #797979;
     position: absolute;
    left: -7%;
    top: 44%;
    transition:cubic-bezier(0.075, 0.82, 0.165, 1)
  }

.p_filter_widgets p:hover a:before {
    background-color: #f7ca44 !important;
}
</style>





{{-- <div class="container p-5 m-5" > --}}
    {{-- <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url({{ url('images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading">Donations</h2>
            </div>
          </div>
        </div>
      </div>

    </div> --}}
  {{-- </div> --}}



  {{-- 2 --}}



  <div class="row justify-content-center " style="margin-top:130px; background:#f6f6f6">
    @if ($message = Session::get('success'))
    {{-- <div class="alert alert-success text-center fw-bolder" role="alert"> --}}
        <script>
            swal("Package Booked successfully.", " ", "success");
        </script>
        {{-- {{ alert($message) }} --}}
    {{-- </div> --}}
    @endif
    <div class=" container-fluid px-5">
            <div class="header p-4" style="">


                    <h2>Donations / {{ $category->name }}</h2>
                    @auth
                    <p class="h5" style="color:#f7ca44">Located In {{ auth()->user()->city->name }}</p>
                    @endauth
            </div>
    </div>
</div>

  <div class="container-fluid d-flex justify-content-center flex-row mt-50 mb-50 p-5">

    <div class="col-lg-3">
        <div class="left_sidebar_area">
          <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
              <h3>Browse Categories</h3>
              <hr style=" width: 80%; background-color: #f7ca44; margin-left: -2px"/>
            </div>
            <div class="widgets_inner">
              <ul class="list">
                @foreach ($categories as $category)

                <p class="h4 p_filter_widgets" style="position: relative;">
                  <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                  <hr style=" width: 80%; margin-left: -10px"/>
                </p>
                @endforeach

              </ul>
            </div>
          </aside>
        </div>
      </div>
      <div class="container my-5 ">
      <div class="row flex-row">
        @foreach ($packages as $package)

<div class="col-lg-3 mt-3">


    <div class="card">
        {{-- <div class="card-img-actions"> --}}

                                    <img src="{{ url('Image/'.$package->image) }}" class="card-img-top " width="400" height="250" alt="">


        {{-- </div> --}}
    </div>
                        {{-- <div class="card-body"> --}}

                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <h6 class="font-weight-semibold mb-2"class="text-default mb-2" data-abc="true" style="font-size:20px">
                                    {{ $package->title }}
                                </h6>

                                {{-- <p  class="text-muted" data-abc="true">{{ $package->description }}</p> --}}
                                {{-- <p  class="text-muted" data-abc="true">{{ $package->products_number }}</p> --}}
                                <p  class="text-muted" data-abc="true">{{ $package->condition }} condition</p>
                            </div>






                            @auth
                            @if (auth()->user()->status == 1)
                            <a href="{{ route('packages.show', $package->id) }}" class="btn bg-cart" style="color: #656262"><i class="fa fa-cart-plus mr-2"></i> Show Item</a>
                            @endif
                            @endauth


                        </div>
                    {{-- </div> --}}




</div>
@endforeach
</div>
</div>



        </div>











<div class="container d-flex justify-content-center">
    <nav aria-label="Page navigation example" class="mx-auto my-5">
{{ $packages->links() }}
      </nav>
    </div>



{{-- 2 --}}








@endsection
