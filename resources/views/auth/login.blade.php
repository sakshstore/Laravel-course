@extends('layout')

@section('content')

<form action="{{ route('login') }}" method="POST">
	@csrf

	<div class="form-group">
		<label>E-mail</label>
		<input name="email" value="{{ old('email') }}" required class="form-control{{$errors->has('email') ? ' is-invalid': '' }}">

		@if ($errors->has('email'))
			<span class="invalid-feedback">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
		@endif

	</div>

	<div class="form-group">
		<label>Password</label>
		<input name="password" type="password" required class="form-control{{$errors->has('password') ? ' is-invalid': '' }}">

		@if ($errors->has('password'))
			<span class="invalid-feedback">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif

	</div>

	<div class="form-group">
		<div class="form-check">
			<input type="checkbox" name="remember" value="{{ old('rembemer') ? 'checked': '' }}" class="form-check-input">
			<label for="remember" class="form-check-label">Remember Me</label>
		</div>
	</div>

	<button type="submit" class="btn btn-primary btn-block">Log In</button>

</form>

@endsection('content')