@extends('main')

@section('content')
<div class="row">
  <div class="center-block" style="width: 500px">
		<div class="well">
			<form action = "{{route('posts.store')}}" method = "post">
		     <input type = "hidden" name = "_token" value = "{{csrf_token()}}">
		     
		     	 <div class="form-group">
				    <label for="title">Title:</label>
				    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
				    @if($errors->has('title'))
				    <span class="text-danger" >* {{$errors->first('title')}}</span>
				    @endif
				  </div>
				  <div class="form-group">
				    <label for="body">Content:</label>
				    <textarea class="form-control" name="body" id="body" rows="4">{{old('body')}}</textarea>
				  </div>

				  <button type="submit" class="btn btn-default">Submit</button>		
		  </form>
		  <div id="app">
		  	<example></example>
		  </div>
		</div>
	</div>
</div>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection