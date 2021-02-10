@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-md-12">
            <div class="card">
                   
                <div class="card-header">Update <b style="color: red">@foreach ($single_roomMembers as $single_roomMember)
                    {{$single_roomMember->member_name}}'s'
                 </b>info
                <a class="pl-5" style="font-style: italic;font-weight: bold;text-align: right;" href="/add/member/insert/{{$single_roomMember->id}}">Back To view</a>
                @endforeach
            </div>

                <div class="card-body">
                    @if (session('update_status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('update_status') }}
                        </div>
                    @endif
                    <form action="{{ url('/update/single/description') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="form-group ">
                       
                        
                        <input type="hidden" name="member_id"  class="form-control" id="" placeholder="Daily_Meal"  value="{{$single_des->id}}">
                        
                    </div>
                     <div class="form-group ">
                        <label>Date Of consume</label>
                        
                        <input type="text" name=""  class="form-control" id="" placeholder="Daily_Meal"  value="{{$single_des->created_at->format('D/M/Y h:i:m')}}">
                        
                    </div>
                    <div class="form-group ">
                        <label>Daily_Meal</label>
                        
                        <input type="text" name="Daily_Meal"  class="form-control" id="" placeholder="Daily_Meal"  value="{{$single_des->daily_meal}}">
                        
                    </div>
                     <div class="form-group ">
                        <label>Deposite</label>
                        
                        <input type="text" name="Deposite"  class="form-control" id="" placeholder="Deposite"  value="{{$single_des->deposit}}">
                        
                    </div>
                   
                    <div class="form-group">
                        <div class="">
                            <button type="submit"  class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
       
       
    </div>
</div>
@endsection
