@extends ('layouts.master')

@section ('content')

	<script>
		$(document).ready(function () {


			$('#damn').on('click',function(e){

		    console.log("blah");

		    e.preventDefault(e);
		    console.log($('#post_form').serializeArray());
		  //   	$.ajax({
				//   method: "POST",
				//   url: "/posts",
				//   data: { name: "John", location: "Boston" }
				// })
				//   .done(function( msg ) {
				//     alert( "Data Saved: " + msg );
				//   });

		        $.ajax({

		        type:"POST",
		        method: "POST",
		        url:'/posts',
		        data:$('#post_form').serializeArray(),
		        dataType: 'json',
		        success: function(data){
		        		alert(data['message']);
			            console.log(data);
			        },
		        error: function(jqXHR, status, err){
		        		console.log(status),
       					console.log(err)
       					console.log(jqXHR.responseText);
			        }
		    	});

		    });
		});

		// $('#post_form').submit(function(e) {

		//     e.preventDefault(); 

		// 	var dataToPost = $(this).serialize();

		// 	jQuery.post('/posts', dataToPost).done(function(response, status, jqxhr){ 
	 //                // this is the "success" callback
	 //            });
		// });




	</script>

	<h3>Publish an Ad</h3>

	{{-- <form id="post_form" action="/posts" method="POST"> --}}
	<form id="post_form" action="/posts">

	  {{ csrf_field() }}

	  <div class="form-group">
				
		<label for="name">Company Name:</label>
		<input type="text" class="form-control" id="name" name="name" required=>

	  </div>

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

	  	<button type="submit" formaction="/posts" class="btn btn-primary">Publish</button>
	  	<a id="damn" class="btn btn-primary" href="/#">Publish</a>

	  </div>

	  @include('layouts.errors')


	</form>

</div>

@endsection