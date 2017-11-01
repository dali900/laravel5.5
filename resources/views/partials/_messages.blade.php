@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
	  <b>Success!</b>
	  <p> {{ Session::get('success')}} </p>
	</div>
@endif

@if (Session::has('error'))
	<div class="alert alert-danger" role="alert">
	  <b>Error!</b>
	  <p> {{ Session::get('error')}} </p>
	</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger" role="alert">
	  <b>Errors!</b>
	  @foreach ($errors->all() as $error)
	  	<p>{{$error}}</p>
	  @endforeach
	</div>
@endif