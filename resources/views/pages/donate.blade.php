
@extends('layouts.master')

@section('content')

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading">Better To Give Than To Receive</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div class="site-section fund-raisers">
    <div class="container">


      <div class="featured-section overlay-color-2" style="background-image: url('images/bg_2.jpg');">
    
        <div class="container">
          <div class="row">
    
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="images/bg_2.jpg" alt="Image placeholder" class="img-fluid">
            </div>
    
            <div class="col-md-6 pl-md-5">
    
              <div class="form-volunteer">
                
                <h2>Be A Volunteer Today</h2>
                <form action="{{ route('donations.store') }}" method="POST">
                  @csrf
               
                  <div class="form-group">
                    <!-- <label for="name">Name</label> -->
                    <input type="text" class="form-control py-2" name="donator_name" placeholder="Enter your name">
                  </div>

                  <div class="form-group">
                    <!-- <label for="phone_num">Phone Number</label> -->
                    <input type="text" class="form-control py-2" name="phone_num" placeholder="Enter your phone number">
                  </div>

                  <div class="form-group">
                    <!-- <label for="city_id">City</label> -->
                    <input type="text" class="form-control py-2" name="city_id" placeholder="Enter your location">
                  </div>



                  <div class="form-group">
                    <!-- <label for="pack_img">Package image</label> -->
                    <input type="text" class="form-control py-2" name="pack_img" placeholder="Upload an image for the package">
                  </div>

                  <div class="form-group">
                    <!-- <label for="num_content">Number of content</label> -->
                    <input type="text" class="form-control py-2" name="num_content" placeholder="Number of package content">
                  </div>


                  <br><div class="dropdown">
                    <label for="num_content">Type of the package</label> 
                   <button class="btn btn-primary dropdown-toggle" type="button" name="pack_type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Choose
                   </button>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                     <a class="dropdown-item" >Old age</a>
                     <a class="dropdown-item" >Middle age</a>
                     <a class="dropdown-item" >Childhood</a>
                   </div>
                 </div><br>
                  
                  <div class="dropdown">
                     <label for="num_content">Condition of the package</label> 
                    <button class="btn btn-primary dropdown-toggle" type="button" name="condition" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Choose
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <a class="dropdown-item" >Excellent</a>
                      <a class="dropdown-item" >Good</a>
                      <a class="dropdown-item" >Poor</a>
                    </div>
                  </div><br>

                  <div class="form-group">
                    <!-- <label for="v_message">Email</label> -->
                    <textarea name="v_message" id="" cols="30" rows="3" class="form-control py-2" placeholder="Description of the package"></textarea>
                    <!-- <input type="text" class="form-control py-2" id="email"> -->
                  </div>


                  <div class="form-group">
                    <input type="submit" class="btn btn-white px-5 py-2" value="Send">
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
    
      </div> <!

      
    </div>
  </div> <!-- .section -->
-- .featured-donate -->

@endsection