@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                @if($errors->all())
                <div class="alert alert-success" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
                @endif
                <div class="card-header">Edit Room-Member<b style="font-style: italic;"><a class="pl-5 text-success" href="{{ url('/home') }}">HOME</a></b></div>

                <div class="card-body">
                    @if (session('updatestatus'))
                        <div class="alert alert-success" role="alert">
                            {{ session('updatestatus') }}
                        </div>
                    @endif
                    <form action="{{ url('edited/member/insert') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group ">
                        <label>Product Name</label>
                        <input type="hidden" name="room_member_id"  class="form-control" id="" placeholder="Room-Member Name"  value="{{$single_R_member->id}}">
                        <input type="text" name="room_member"  class="form-control" id="" placeholder="Room-Member Name"  value="{{$single_R_member->member_name}}">
                        
                    </div>
                     <div class="form-group ">
                        <label>Member Age</label>
                        
                        <input type="text" name="member_age"  class="form-control" id="" placeholder="Member_Age"  value="{{$single_R_member->member_Age}}">
                        
                    </div>
                    <div class="form-group">
                        <div class="">
                            <button type="submit"  class="btn btn-primary">Edit Member</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
