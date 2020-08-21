@extends('layouts.home')

@section('content')
<h1 class="text-center content-section">User Login</h1>
<div class="content-section">
	<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
	</div>
</div>
<button type="submit" class="btn btn-primary btn-block">Login</button>

@endsection