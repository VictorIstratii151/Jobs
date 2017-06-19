{{-- @extends ('layouts.master')

@section ('content') --}}

	<h3>Publish an Ad</h3>

	<form method="POST" action="/posts">

	  {{ csrf_field() }}

	  <div class="form-group">
				
		<label for="email">Company Email:</label>
		<input type="email" class="form-control" id="email" name="email" required=>

	  </div>

	  <div class="form-group">

	    <label for="phone_number">Company Phone Number:</label>
	    <input type="number" class="form-control" id="phone_number" name="phone_number" >

	  </div>

	  <div class="form-group">

	    <label for="title">Title:</label>
	    <input type="text" class="form-control" id="title" name="title" >

	  </div>


	  <div class="form-group">

	    <label for="body">Body:</label>
	    <textarea class="form-control" id="body" name="body" ></textarea>

	  </div>


	  <div class="form-group">

	  	<button type="submit" class="btn btn-primary">Publish</button>

	  </div>

	  @include('layouts.errors')


	</form>

</div>

{{-- @endsection --}}