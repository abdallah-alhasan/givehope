@extends('layouts.admin')

@section('content')
    {{-- @php
        echo '<pre>;';
          print_r($users->city);
        echo '<pre>;';
    @endphp --}}
              <!-- Hoverable Table rows -->
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
                        <th>Order ID</th>
                        <th>Doner name</th>
                        <th>Status</th>
                        <th>Items</th>
                      </tr>
                    </thead>
                    @php
                        $i = 1;
                    @endphp
                    <tbody class="table-border-bottom-0">
                      @foreach ($orders as  $order)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$order->id}}</strong></td>
                        <td>{{$order->doner_name}}</td>
                        <td><span class="badge bg-label-{{$order->status == 0 ? 'warning' : 'success'}} me-1">{{$order->status == 0 ? 'Pending' : 'Approved'}}</span></td>
                        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$orders_package[$order->id - 1]->title ?? 'none'}}</strong></td> --}}

                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('packages.edit' , $order->id)}}"{{--pass the user id--}}
                                ><i class="bx bx-show me-1"></i> View</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @php
                          $i++;
                      @endphp
                      @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>

              {{-- pagination --}}
              <div class="pagination-wrapper">
                {{ $orders->links('pagination::bootstrap-4')}}
              </div>

              <!--/ Hoverable Table rows -->
@endsection