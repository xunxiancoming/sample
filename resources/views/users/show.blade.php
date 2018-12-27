@extends('layouts.default')
@section('title',$user->name)

@section('content')
	
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="col-md-12">
				<div class="col-md-offset-1 col-md-10">
					<section class="user_info">
						@include('shared._user_info',['user'=>$user])
					</section>
						
					<div class="mt-1 mb-2">
						@if(Auth::check())
							@include('users._follow_form')
						@endif
					</div>
					<br>

					<section class="stats mt-4">
						@include('shared._stats',['user'=>$user])
					</section>
					<hr>
					<section>
						@if($statuses->count()>0)
						<ul class="list-unstyled">
							@foreach($statuses as $status)
								@include('statuses._status')
							@endforeach
						</ul>
						<div class="mt-5">
							{!! $statuses->render() !!}
						</div>
						@else
						<p>没有数据！</p>
						@endif
					</section>
				</div>
			</div>
		</div>
	</div>
@stop	