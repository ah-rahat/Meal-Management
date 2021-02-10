
@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row ">
		
		<div class="col-md-12">
			<div class="card-header">Member Name:<b>{{$single_member_info->member_name}}</b>
				<b class="pl-5">Member Age:{{$single_member_info->member_Age}}</b>
				<b style="font-style: italic;"><a class="pl-5 text-success" href="{{ url('/home') }}">HOME</a></b>
			</div>
			<table class="table table-bordered">
				@if (session('delete_status'))
				<div class="alert alert-success" role="alert">
					{{ session('delete_status') }}
				</div>
				@endif
				<thead>
					<tr>
						
						<th scope="col">Date</th>
						<th scope="col">Daily Meal</th>
						<th></th>
						<th scope="col">Deposit</th>
					</tr>
				</thead>
				<tbody>
					@php
					$sum_of_meal=0;
					$sum_of_deposite=0;
					@endphp
					@forelse($single_member_profiles as $single_member_profile)
					<tr>
						
						<td>{{$single_member_profile->created_at->format('D-M-Y h:i:s A')}}</td>
						<td>{{$single_member_profile->daily_meal}}
							@php
							$daily_meal=$single_member_profile->daily_meal;
							$sum_of_meal=$daily_meal+$sum_of_meal;
							@endphp
						</td>
						<td rowspan="">------------------------------------------------------</td>
						<td>{{$single_member_profile->deposit}}
							@php
							$deposite=$single_member_profile->deposit;
							$sum_of_deposite=$sum_of_deposite+$deposite;
							@endphp
						</td>
						
					</tr>
					@empty
					<tr>
						
					<p style="color: red;text-align: center;font-weight: bolder;font-style: italic;font-size: 30px">No meal consume Yet</p>
					</tr>
					@endforelse

					<tr>
						<td>------------------------------------------------------</td>
						<td>TOTAL Meal:
							@php
							echo $sum_of_meal;
							@endphp
						</td>
						<td>Cost_of_goods:

							@php
							   $total_cost=0;
							@endphp
							@foreach ($cost_of_goods as $cost_of_good)
							@php
								$sum_of_good=$cost_of_good->daily_cost;
								$total_cost=$sum_of_good+$total_cost;
								
							@endphp
								
							@endforeach
							@php
								echo $total_cost;
							@endphp
							
						</td>
						<td>Total Deposite:
							@php
							   echo $sum_of_deposite;
							@endphp
						</td>
					</tr>
					<tr>
						<td>------------------------------------------------------</td>
						<td>
								overall Meal:
							@php
								$overall_meal_consume=0;
							@endphp
							@foreach ($overall_meals as $overall_meal)
							 @php
							 	$single_meal=$overall_meal->daily_meal;
								$overall_meal_consume=$single_meal+$overall_meal_consume;
							 @endphp
								
							@endforeach
                             @php
                             	echo $overall_meal_consume;
                             @endphp
						</td>
						<td> Meal Rate:
							@php
								$meal_rate=$total_cost/$overall_meal_consume;
								echo $meal_rate;
							@endphp
						</td>
						<td>Totoal Consume:
							@php
								$total_consume=$meal_rate*$sum_of_meal;
								echo $total_consume;
							@endphp
						</td>
					</tr>
					<tr>
						<td>------------------------------------------------------</td>
						<td>--------------------------</td>
						<td>------------------------------------------------------</td>
						<td>Debit Or Credit
							@php
							$d_c=$sum_of_deposite-$total_consume;
							echo $d_c;
						    @endphp
					</td>
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
	<hr>
	
</div>
@endsection
