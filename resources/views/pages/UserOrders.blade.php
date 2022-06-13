
@extends('layouts.master')

@section('content')

<div class="block-31" style="position: relative;">
    <div class="loop-block-31 ">
       {{-- <div class="block-30 block-30-sm item" style="background-image: url({{url('images/donate.jpg')}});" data-stellar-background-ratio="0.5"> --}}
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <br><br><br><h2 class="heading">Better To Give Than To Receive</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="site-section fund-raisers">
    <div class="container">


      

    
            @if(session()->has('message'))
            <div class="alert alert-success ">
                {{ session()->get('message') }}
            </div>
          @endif
          <div class="card">
            <div class="table-responsive text-nowrap">
              <table class="table table-hover">
                <thead>
                  <tr>
                      <th>Item</th>
                      <th>Description</th>
                      <th>Condition</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
                </thead>
                @php
                    $i = 0;
                @endphp
                <tbody class="table-border-bottom-0">
                 {{-- @foreach ($items as  $item) --}}
                  <tr>
                    {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders_package[$i]->title}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{substr($orders_package[$i]->description,0,50)}}</strong></td>
                    <td><span class="badge bg-label-{{$orders_package[$i]->condition == 'Poor' ? 'warning' : 'success'}} me-1">{{$orders_package[$i]->condition}}</span></td>
                    <td><img src="/storage/{{$orders_package[$i]->image}}" alt="Avatar" class="" width="100" height="100" /></td> --}}
                    {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$items_package[$i]->title ?? 'none'}}</strong></td> --}}

                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="{{'/delete/' . $orders_package[$i]->id}}" --}}
                            ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                        </div>
                    </div>
                    </td>
                  </tr>
                  @php
                      $i++;
                  @endphp
                  {{-- @endforeach --}}
                  
                </tbody>
              </table>
            </div>
          </div>

          {{-- pagination --}}
          <div class="pagination-wrapper">
            {{-- {{ $items->links('pagination::bootstrap-4')}} --}}
          </div>

       








    </div>
  {{-- </div> <!-- .section --> --}}
<!--.featured-donate -->

@endsection
