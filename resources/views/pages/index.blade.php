@extends('layouts.master')



@section('content')
<div class="block-31" style="position: relative;">
    <div class=" loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/child.png');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">For It Is In Giving That We Receive.</h2>
              <p style="display: inline-block;"><a href="https://www.youtube.com/watch?v=MG3jGHnBVQs&t=158s"  data-fancybox class="ftco-play-video d-flex"><span class="play-icon-wrap align-self-center mr-4"><span class="ion-ios-play"></span></span> <span class="align-self-center">Watch Video</span></a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

{{-- hero slider --}}





{{-- end of hero slider --}}



  <div class="site-section section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pr-5">
          <div class="block-48">
              <span class="block-48-text-1">Served Over</span>
              <div class="block-48-counter ftco-number" data-number="3760">0</div>
              <span class="block-48-text-1 mb-4 d-block">Familes in 5 Cities</span>
              <p class="mb-0"><a href="#" class="btn btn-white px-3 py-2">View Our Program</a></p>
            </div>
        </div>
        <div class="col-md-6 welcome-text">
          <h2 class="display-4 mb-3">Who Are We?</h2>
          <p class="lead">More than 1,000 donors have trusted GiveHope to direct their donations. Together, they have given over 5000 to the organizations we recommend. These donations will save many families and provide cfurinter for global poor.</p>
          <p class="mb-4">Be The One Who Make The Difference . </p>
          <p class="mb-0"><a href="" class="btn btn-primary px-3 py-2">Donate Now</a></p>
        </div>
      </div>
    </div>
  </div>


<div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2> Donations</h2>
        </div>
      </div>

      <div class="row">

      @foreach($data as $values)
 <div class="col-12 col-sm-4 col-md-2 col-lg-3 mb-2 mb-lg-0">
          <div class="post-entry text-center">
            {{-- <a href="#" class="mb-3 img-wrap"> --}}

              <img src="{{ url('Image/'.$values->image) }}" alt="Image placeholder"   class='img-wrap' width ="270" height="200" >
            {{-- </a> --}}

            <h3 class="date mb-4 d-block text-muted" style="font-size: 25px;margin-top:10px"><a href="{{ route('categories.show', $values->id) }}"> {{$values->name}}</a></h3>
            <p style="margin-top:-15px">{{$values->desc}}</p>


          </div>
        </div>
        @endforeach

    </div>
</div>
</div>







{{-- <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
    <div class="post-entry">
        @foreach($data as $values)
      <a href="#" class="mb-3 img-wrap">
        <img src="{{ url('Image/'.$values->image) }}" alt="Image placeholder" class="img-fluid"  width ="250" height="200">
      </a>
      <h3 class="date mb-4 d-block text-muted" style="font-size: 20px"><a href="{{ route('categories.show', $values->id) }}"> {{$values->name}}</a></h3>
      <span>{{$values->desc}}</span>

    </div>
  </div> --}}












{{--
   <section class='product-category site-section'>
            <div class='container'>
                <div class='row'>
                    <div class="col-md-12">
                        <div class='title text-center'>
                            <h2>Our Donations</h2>

                        </div>
                    </div>
                    @foreach($data as $values)
                          <div class='col-md-6'>
                        <div class='category-box text-center' >
                            <a href='#'>
                                <img src="{{ url('Image/'.$values->image) }}" alt="Image placeholder" width ="500" height="350"/>
                                <div class='content' style='background-color: #ffffffdb;'>
                                    <h3 style="margin-top: 20px"><a href="#">{{$values->desc}}</a></h3>
                                    <span class="date mb-4 d-block text-muted " style="font-size: 20px">{{$values->name}}</span>
                                </div>
                            </a>
                        </div>
                </div>
                @endforeach


            </div>
          </div>
        </section> --}}











  {{-- <div class="site-section fund-raisers bg-light">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Latest Collaborations</h2>
          <p class="lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p><a href="#" class="link-underline">Take A Look At Our Trusted Partners!</p>
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <!-- <div class="row"> -->

        <div class="col-md-12 block-11">
          <div class="loop-block-11 owl-carousel">

            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_1.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Water Is Life. Clean Water In Urban Area</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>


            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_1.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Need Shelter for Children in Africa</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>

            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_3.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Children Needs Education</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>


            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_4.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Refugees Needs Food</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>


            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_6.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Voluteer </a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>

            <div class="card fundraise-item">
              <a href="#"><img class="card-img-top" src="images/img_3.jpg" alt="Image placeholder"></a>
              <div class="card-body">
                <h3 class="card-title"><a href="#">Children Needs Food</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
              </div>
            </div>

          </div>
        </div>
      <!-- </div> -->
    </div>
  </div> <!-- .section --> --}}



  <div class="featured-section overlay-color-2" style="background-image: url('images/bg_3.jpg');">

    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="images/bg_3.jpg" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Success Stories</span>
          <h2>The Act of Giving Is Life. We Successfuly Provided 2560 Families With Needed House Supplies.</h2>
          <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <span class="fund-raised d-block mb-5">Want To Be Part Of Our Success Stories? </span>

          <p><a href="#" class="btn btn-success btn-hover-white py-3 px-5" style=" color:#f7ca44; background-color: rgba(255, 255, 255, 0.952); border:white">Donate Now!</a></p>
        </div>

      </div>
    </div>

  </div> <!-- .featured-donate -->



  <!-- .featured-donate -->

  <div class="site-section border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-bulb"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Mission</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="link-underline">Learn More</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-cash"></span></div>
            <div class="media-body">
              <h3 class="heading">Make Donations</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="link-underline">Learn More</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-contacts"></span></div>
            <div class="media-body">
              <h3 class="heading">We Need Volunteers</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="link-underline">Learn More</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->




@endsection

