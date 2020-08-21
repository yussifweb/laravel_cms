@extends('layouts.home')

@section('content')
<h1 class="text-center content-section">Register</h1>

<div class="content-section mb-5">
	<div class="form-group">
		<label class="h5">Name</label>
		<input type="text" class="form-control" name="name" placeholder="Name">
	</div>
	<div class="form-group">
		<label class="h5">Zipcode</label>
		<input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
	</div>
	<div class="form-group">
		<label class="h5">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form-group">
		<label class="h5">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label class="h5">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label class="h5">Confirm Password</label>
		<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
	</div>

	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</div>


@endsection