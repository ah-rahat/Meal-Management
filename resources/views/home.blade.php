@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-4">
            <div class="card">
                @if($errors->all())
                <div class="alert alert-success" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
                @endif
                <div class="card-header">Add Room-Member</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('add/member') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group ">
                        <label>Member Name</label>
                        
                        <input type="text" name="room_member"  class="form-control" id="" placeholder="Room-Member Name"  value="{{old('room_member')}}">
                        
                    </div>
                     <div class="form-group ">
                        <label>Member Age</label>
                        
                        <input type="text" name="member_age"  class="form-control" id="" placeholder="Member_Age"  value="">
                        
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit"  class="btn btn-primary">Add Member</button>
                        </div>
                    </div>
                </form>
                </div>
                <br>
                <div class="card-header">Daily cost of Goods <a class="pl-5" style="font-style: italic;font-weight: bold;text-align: right;" href="{{ url('daily/cost/show') }}">Show Cost Chart</a></div>
                <div class="card-body">
                    @if (session('addstatus'))
                        <div class="alert alert-success" role="alert">
                            {{ session('addstatus') }}
                        </div>
                    @endif
                    <form action="{{ url('daily/cost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group ">
                        <label>Cost</label>
                        
                        <input type="text" name="daily_cost"  class="form-control" id="" placeholder="Room-Member Name"  value="">
                        
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit"  class="btn btn-primary">Add Cost</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
             
            <table class="table table-bordered">
                  @if (session('delete_status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('delete_status') }}
                        </div>
                    @endif
            <thead>
                <tr>
                    
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col">Room member Name</th>
                    <th scope="col">Member Age</th>
                   
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                 <tr>
                 {{--  <td>{{$member->id}}</td> --}}
                  <td>{{$member->member_name}}</td>
                  <td>{{$member->member_Age}}</td>
                  <td><a class="btn btn-primary" href="{{ url('/add/member/insert')}}/{{$member->id}}">insert data</a>
                    <a class="btn btn-dark" href="{{ url('view/member/profile') }}/{{$member->id}}">view_profile</a>
                    <a class="btn btn-info" href="{{ url('/edit/member') }}/{{$member->id}}">Edit_member</a>
                    <a class="btn btn-danger" href="{{ url('/delete/member') }}/{{$member->id}}">delete_member</a>
                </td>
                  
                 
              </tr>
                @endforeach
             
                
                
                
            </tbody>
        </table>
        </div>
    </div>
    <hr>
        <div class="row ">
        <div class="offset-md-4 col-md-8">
                <div class="card-header">Trashed Room-Member</div>
            <table class="table table-bordered">
                  @if (session('restore_status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('restore_status') }}
                        </div>
                    @endif
                    @if (session('per_status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('per_status') }}
                        </div>
                    @endif
            <thead>
                <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Room member Name</th>
                    <th scope="col">Member Age</th>
                   
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse($soft_deletes as $soft_delete)
                 <tr>
                  <td>{{$soft_delete->id}}</td>
                  <td>{{$soft_delete->member_name}}</td>
                  <td>{{$soft_delete->member_Age}}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('/per_del/member')}}/{{$soft_delete->id}}">Permarent Delete</a>
                     <a class="btn btn-primary" href="{{ url('/restore/member')}}/{{$soft_delete->id}}">Restore</a>
                    
                </td>
                  
                 
              </tr>
              @empty
                <tr>
                    <td colspan="6" class="text-center text-danger" >NO Trashed Member available</td>
                </tr>
                @endforelse
             
                
                
                
            </tbody>

        </table>
        </div>
    </div>
</div>
@endsection
