
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


      <div class="featured-section overlay-color-2" style="background-image: url({{url('images/bg_2.jpg')}});">
    
        <div class="container">
          <div class="row">
    
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="{{url('images/bg_2.jpg')}}" alt="Image placeholder" class="img-fluid">
            </div>
    
            <div class="col-md-6 pl-md-5">
    
              <div class="form-volunteer">
                
               <b> <h2>Be A Volunteer Today</h2></b>

                <form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
               
                  <div class="form-group">
                    <b> <label for="name">Name</label> </b>
                    <input type="text" class="form-control py-2" name="doner_name" placeholder="Enter your name">
                  </div>

                  <div class="form-group">
                    <b> <label for="phone_num">Phone Number</label> </b>
                    <input type="text" class="form-control py-2" name="phone_number" placeholder="Enter your phone number">
                  </div>






                  <div class="form-group col-md-4">
                    <label for="">City</label>
                    <select id="" class="form-control" name="city_id">
                      @foreach ($city as $item)
                      <option class="dropdown-item" value="{{$item->id}}" >{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
<br><br>
                  <div class="form-group">
                    <b> <label for="">Product name</label> </b>
                    <input type="text" class="form-control py-2" name="title" placeholder="Enter your product name">
                  </div>

                  <div class="form-group">
                    <b> <label for="pack_img">Product image</label> </b>
                    <input type="file" class="form-control py-2" name="image" placeholder="Upload an image for the product">
                  </div>

                  <div class="form-group">
                   <b>  <label for="num_content">Number of items</label> </b>
                    <input type="text" class="form-control py-2" name="products_number" placeholder="Number of package content">
                  </div>


                  

                 <div class="form-group col-md-4">
                  <label for="">Category</label>
                  <select id="" class="form-control" name="category_id">
                    @foreach ($category as $item)
                    <option class="dropdown-item" value="{{$item->id}}" >{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
<br>

                <div class="form-group col-md-4">
                  <label for="">Condition of the product</label>
                  <select id="" class="form-control" name="condition">
                    <option value="Excellent" selected>Excellent</option>
                    <option value="Good">Good</option>
                    <option value="Poor">Poor</option>
                  </select>
                </div>
                


                  <div class="form-group">
                    <!-- <label for="v_message">Email</label> -->
                    <textarea name="description" id="" cols="30" rows="3" class="form-control py-2" placeholder="Description of the package"></textarea>
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
    
      </div> 

      
    </div>
  </div> <!-- .section -->
<!--.featured-donate -->

@endsection