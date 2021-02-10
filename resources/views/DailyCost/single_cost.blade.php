@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row ">
        
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Daily cost of Goods <a class="pl-5" style="font-style: italic;font-weight: bold;text-align: right;" href="{{ url('daily/cost/show') }}">Show Cost Chart</a></div>
            <div class="card-body">
                @if (session('updatedstatus'))
                <div class="alert alert-success" role="alert">
                    {{ session('updatedstatus') }}
                </div>
                @endif
                <form action="{{ url('/daily/cost/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                        <label>Date</label>
                        <input type="hidden" value="{{$single_cost->id}}" name="cost_id">
                        <input type="text" name=""  class="form-control" id="" placeholder="Room-Member Name"  value="{{$single_cost->created_at->format('D-M-Y h:i:s A')}}">
                        
                    </div>
                     <div class="form-group ">
                        <label>Cost</label>
                        
                        <input type="text" name="daily_cost"  class="form-control" id="" placeholder="Daily Cost"  value="{{$single_cost->daily_cost}}">
                        
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
    </div>
</div>

</div>
</div>
@endsection