<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailyCost;
use Carbon\Carbon;

class DailyCostController extends Controller
{
    function insertDailyCost(Request $request){

    	$request->validate([
    		'daily_cost'=>'required',
    	]);
    	DailyCost::insert([
    		'daily_cost'=>$request->daily_cost,
    		'created_at'=>Carbon::now('Asia/Dhaka'),
    	]);
    	return back()->with('addstatus','Cost add successfully');
    }
    function showDailyCost(){
    	$daily_costs=DailyCost::all();
    	return view('DailyCost/daily_cost',compact('daily_costs'));
    }
    function viewDailyCost($cost_id){
    	$single_cost=DailyCost::find($cost_id);
    	return view('DailyCost/single_cost',compact('single_cost'));
    }
    function updateDailyCost(Request $request){
    	DailyCost::find($request->cost_id)->update([
    		'daily_cost'=>$request->daily_cost,
    		'created_at'=>Carbon::now('Asia/Dhaka'),
    	]);
    	return back()->with('updatedstatus','Cost updated');
    }
    function deleteDailyCost($cost_id){
    	DailyCost::find($cost_id)->delete();
    	return back()->with('deletestatus','Cost delete');
    }
}
