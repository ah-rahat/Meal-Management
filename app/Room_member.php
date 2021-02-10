<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room_member extends Model
{
	use SoftDeletes;
    Protected $fillable=['member_name','member_Age'];
    protected $dates = ['deleted_at'];
    function relationToMemberDes(){
    	return $this->hasOne('App/Member_des','id','member_id');
    }
}

