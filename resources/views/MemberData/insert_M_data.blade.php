@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-md-4">
            <div class="card">

                <div class="card-header">{{$single_member->member_name}} <b style="font-style: italic;"><a class="pl-5 text-success" href="{{ url('/home') }}">HOME</a></b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('add/member/descrip') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group ">
                       
                        
                        <input type="hidden" name="member_id"  class="form-control" id="" placeholder="Daily_Meal"  value="{{$single_member->id}}">
                        
                    </div>
                    <div class="form-group ">
                        <label>Daily_Meal</label>
                        
                        <input type="text" name="Daily_Meal"  class="form-control" id="" placeholder="Daily_Meal"  value="">
                        
                    </div>
                     <div class="form-group ">
                        <label>Deposite</label>
                        
                        <input type="text" name="Deposite"  class="form-control" id="" placeholder="Deposite"  value="0">
                        
                    </div>
                   
                    <div class="form-group">
                        <div class="">
                            <button type="submit"  class="btn btn-primary">Add Data</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <table class="table table-bordered">
                @if (session('delete_status'))
                    <div class="alert alert-success">
                        {{session('delete_status')}}
                    </div>
                @endif
                
                <thead>
                    <tr>
                        
                        <th scope="col">Date</th>
                        <th scope="col">Daily Meal</th>
                        <th scope="col">Deposit</th>
                        <th scope="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Member_wise_infos as $Member_wise_info)
                    <tr>
                        
                        <td>{{$Member_wise_info->created_at->format('D-M-Y h:i:s A')}}</td>
                        <td>{{$Member_wise_info->daily_meal}}
                        </td>
                        <td>{{$Member_wise_info->deposit}}
                        </td>
                          <td><a class="btn btn-primary" href="{{ url('/view/single/description') }}/{{$Member_wise_info->id}}">Edit data</a>
                    <a class="btn btn-dark" href="{{ url('/delete/single/description') }}/{{$Member_wise_info->id}}">delete data</a>
                    
                </td>
                    </tr>
                    @endforeach
                                   </tbody>
            </table>

        </div>
       
    </div>
</div>
@endsection
