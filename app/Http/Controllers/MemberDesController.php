<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member_des;
use App\Room_member;
use Carbon\Carbon;

class MemberDesController extends Controller
{
    function memberdescrip(Request $request){
       Member_des::insert([
       	'member_id'=>$request->member_id,
       	'daily_meal'=>$request->Daily_Meal,
       	'deposit'=>$request->Deposite,
       	'created_at'=>Carbon::now('Asia/Dhaka')
       ]);
       return back()->with('status','description add succesfully');
    }
    function view_single_des($member_id){

    	$single_des=Member_des::find($member_id);
    	$single_roomMembers=Room_member::where('id','=',$single_des->member_id)->get();
       return view('MemberData/view_single_des',compact('single_des','single_roomMembers'));
    }
    function update_single_des(Request $request){

      Member_des::find($request->member_id)->update([
      	'daily_meal'=>$request->Daily_Meal,
      	'deposit'=>$request->Deposite,
      	'created_at'=>Carbon::now('Asia/Dhaka')
      ]);
      	return back()->with('update_status','Data updated');
    }
    function delete_single_des($member_id){
    	Member_des::find($member_id)->delete();
    	return back()->with('delete_status','data deleted');
    }
}
