<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'MemberController@index');
Route::post('add/member','MemberController@memberinsert');
Route::get('/add/member/insert/{member_id}','MemberController@memberdata');
Route::get('/delete/member/{member_id}','MemberController@memberdelete');
Route::get('/edit/member/{member_id}','MemberController@membereditview');
Route::post('edited/member/insert','MemberController@membereEditInsert');
Route::get('/per_del/member/{member_id}','MemberController@per_delMember');
Route::get('/restore/member/{member_id}','MemberController@restoreMember');
Route::get('/view/member/profile/{member_id}','MemberController@viewMemberProfile');
Route::post('add/member/descrip','MemberDesController@memberdescrip');
Route::get('/view/single/description/{member_id}','MemberDesController@view_single_des');
Route::post('/update/single/description','MemberDesController@update_single_des');
Route::get('/delete/single/description/{member_id}','MemberDesController@delete_single_des');
Route::post('/daily/cost','DailyCostController@insertDailyCost');
Route::get('/daily/cost/show','DailyCostController@showDailyCost');
Route::get('/daily/cost/view/{cost_id}','DailyCostController@viewDailyCost');
Route::post('/daily/cost/update','DailyCostController@updateDailyCost');
Route::get('/daily/cost/delete/{cost_id}','DailyCostController@deleteDailyCost');








Auth::routes();


