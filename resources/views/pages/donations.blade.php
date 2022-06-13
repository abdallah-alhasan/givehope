
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
            </div>
            <div class="widgets_inner">
              <ul class="list">
                @foreach ($categories as $category)

                <li class="h4">
                  <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                </li>
                @endforeach

              </ul>
            </div>
          </aside>
        </div>
      </div>

      <div class="row flex-row">
        @foreach ($packages as $package)

<div class="col-lg-3 mt-2">


    <div class="card">
                        <div class="card-body">
                            <div class="card-img-actions">

                                    <img src="https://s1.img.bidsquare.com/item/xl/7584/7584036.jpeg" class="card-img" alt="">


                            </div>
                        </div>

                        <div class="card-body bg-light text-center">
                            <div class="mb-2">
                                <h6 class="font-weight-semibold mb-2"class="text-default mb-2" data-abc="true" style="font-size:20px">
                                    {{ $package->title }}
                                </h6>

                                <p  class="text-muted" data-abc="true">{{ $package->description }}</p>
                                {{-- <p  class="text-muted" data-abc="true">{{ $package->products_number }}</p> --}}
                                <p  class="text-muted" data-abc="true">{{ $package->condition }}</p>
                            </div>






                            @auth
                            <a href="{{ route('packages.show', $package->id) }}" class="btn bg-cart" style="color: #656262"><i class="fa fa-cart-plus mr-2"></i> Show Item</a>
                            @endauth


                        </div>
                    </div>




</div>
@endforeach











<div class="container d-flex justify-content-center">
    <nav aria-label="Page navigation example" class="mx-auto my-5">
{{ $packages->links() }}
        {{-- <ul class="pagination pg-blue justify-content-center">
          <li class="page-item"><a class="page-link">Previous</a></li>
          <li class="page-item"><a href="secondPage.php" class="page-link">1</a></li>
          <li class="page-item"><a href="secondPage.php" class="page-link">2</a></li>
          <li class="page-item"><a href="thirdPage.php" class="page-link">3</a></li>
          <li class="page-item"><a class="page-link">Next</a></li>
        </ul> --}}
      </nav>
    </div>
    </div>

</div>
{{-- 2 --}}








@endsection
