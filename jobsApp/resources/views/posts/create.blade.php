@extends ('layouts.master')

@section ('content')

	<script src="/js/scripts/post_form.js" type="text/javascript"></script>

	<h3>Publish an Ad</h3>

	<form id="post_form" action="/posts">

	  {{ csrf_field() }}

	  <div class="form-group">
				
		<label for="name">Company Name:</label>
		<input type="text" class="form-control" id="name" name="name">

	  </div>

	  <div class="form-group">
				
		<label for="programming_language">Programming Language:</label>
		<input type="text" class="form-control" id="programming_language" name="programming_language">

	  </div>

	  <div class="form-group">
				
		<label for="email">Company Email:</label>
		<input type="email" class="form-control" id="email" name="email">

	  </div>

	  <div class="form-group">

	    <label for="phone_number">Company Phone Number:</label>
	    <input type="number" class="form-control" id="phone_number" name="phone_number" required>

	  </div>

	  <div class="form-group">

	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title">

	  </div>


	  <div class="form-group">

	    <label for="body">Body:</label>
	    <textarea class="form-control" id="body" name="body"></textarea>

	  </div>


	  <div class="form-group">

	  	<a id="submit_post" class="btn btn-primary" href="/#">Publish</a>

	  </div>

	  <div id="response"></div>

	  @include('layouts.errors')


	</form>

</div>

@endsection