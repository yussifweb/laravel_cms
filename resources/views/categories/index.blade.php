@extends('layouts.home')


@section('content')

<h2 class="content-section">Categories</h2>
<ul class="list-group none">
	<li class="list-group-item"><a href="#">News </a>
		<form class="cat-delete ml-3" action="#" method="POST">
			<input type="submit" class="btn btn-danger btn-sm" value="Delete">
		</form>
	</li>
</ul>


@endsection