@extends('layouts.default')
@section('title','更新密码')

@section('content')
<div class="offset-md-1 col-md-10">
	<div class="card">
		<div class="card-header">
			<h5>更新密码</h5>
		</div>

		<div class="card-body">
			<form action="{{ route('password.update') }}" method="POST">
				{{csrf_field()}}

				<input type="hidden" name="token" value="{{ $token }}">

				<div class="form-group row">
					<label for="email" class="col-md-2 col-form-label text-md-right text-justify">Email 地址</label>
					<div class="col-md-6">
						<input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus> 

						@if($errors->has('email'))
						<div>
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						</div>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-md-2 col-form-label text-md-right">密码</label>
					<div class="col-md-6">
						<input id="password" type="password" class="form-control" name="password" required="">

						@if($errors->has('password'))
						<div>
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						</div>
						@endif
					</div> 
				</div>

				<div class="form-group row">
					<label for="password-confirm" class="col-md-2 col-form-label text-md-right">确认密码</label>
					<div class="col-md-6">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required> 
					</div>
				</div>

				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-primary">重置密码</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection