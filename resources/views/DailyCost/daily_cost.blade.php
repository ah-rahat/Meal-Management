@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
             <div class="card-header">
                 <a href="{{ url('/home') }}">Add More Cost</a>
             </div>
            <table class="table table-bordered">
                  @if (session('deletestatus'))
                        <div class="alert alert-success" role="alert">
                            {{ session('deletestatus') }}
                        </div>
                    @endif
            <thead>
                <tr>
                    
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col">Date</th>
                    <th scope="col">Daily_cost</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @php
                    $total=0;
                @endphp
                @foreach($daily_costs as $daily_cost)
                 <tr>
                 {{--  <td>{{$member->id}}</td> --}}
                  <td>{{$daily_cost->created_at->format('D-M-Y h:i:s A')}}</td>
                  <td>{{$daily_cost->daily_cost}}
                    @php
                        $sum=$daily_cost->daily_cost;
                        $total=$sum+$total;
                    @endphp
                    
                  </td>
                  <td><a class="btn btn-primary" href="{{ url('/daily/cost/view') }}/{{$daily_cost->id}}">Update</a>
                    <a class="btn btn-dark" href="{{ url('/daily/cost/delete') }}/{{$daily_cost->id}}">Delete</a>
               
                </td>
                  
                 
              </tr>

                @endforeach
               <tr>
                   <td>-----------</td>
                   <td> Total Cost:
                      @php
                           echo $total;
                       @endphp 
                   </td>
                   <td>------------</td>
               </tr>
                
                
                
            </tbody>
        </table>
        </div>
    </div>
    <hr>
       
</div>
@endsection
