<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_member;
use App\Member_des;
use App\DailyCost;
use Carbon\Carbon;

class MemberController extends Controller
{ 
	 public function index()
    { 
    	$members=Room_member::all();
    	$soft_deletes=Room_member::onlyTrashed()->get();

        return view('home',compact('members','soft_deletes'));
    }
    function memberinsert(Request $request)
    {
    	$request->validate([
    		'room_member'=>'required',
    		'member_age'=>'required|numeric'
    	]);
    	Room_member::insert([
    		'member_name'=>$request->room_member,
    		'member_Age'=>$request->member_age,
    		'created_at'=>Carbon::now('Asia/Dhaka'),
    	]);
    	return back()->with('status','member insert successfull');

    	
    }
    function memberdata($member_id)
    {
    	$Member_wise_infos=Member_des::where('member_id','=',$member_id)->get();
    	$single_member=Room_member::find($member_id);
    	return view('MemberData/insert_M_data',compact('single_member','Member_wise_infos'));
    	
    }
    function memberdelete($member_id){
    	Room_member::find($member_id)->delete();
    	return back()->with('delete_status','Member Delete successfull');
    }
    function membereditview($member_id){
    	$single_R_member=Room_member::find($member_id);
    	return view('MemberData/edit_member',compact('single_R_member'));
    }
    function membereEditInsert(Request $request){
    		Room_member::find($request->room_member_id)->update([
    			'member_name'=>$request->room_member,
    		    'member_Age'=>$request->member_age,
    		]);
    		return back()->with('updatestatus','member update successfull'); 
    }
    function per_delMember($member_id){
    	Room_member::onlyTrashed()->where('id',$member_id)->forcedelete();
    	return back()->with('per_status','Member Permarently Deleted');
    }
    function restoreMember($member_id){
    	Room_member::onlyTrashed()->where('id',$member_id)->restore();
    	    	return back()->with('restore_status','Member Restore successfully');

    }
    function viewMemberProfile($member_id){
    	$single_member_info=Room_member::find($member_id);
        $single_member_profiles=Member_des::where('member_id','=',$member_id)->get();
        $overall_meals=Member_des::all();
        $cost_of_goods=DailyCost::all();


    	 return view('MemberData/view_member_profile',compact('single_member_info','single_member_profiles','overall_meals','cost_of_goods'));

    }

}
