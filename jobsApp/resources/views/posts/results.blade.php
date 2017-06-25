	

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">


	<title></title>
</head>
<body>
	 <div class="jumbotron">
        <div class="container">
        <h2>Search results</h2>
      </div>
    </div>

	<div id="dashboard" class="row">
		@foreach ($posts as $post)

			<div class="col-md-4">

				<h2> {{ $post->title }} </h2>

				<p> {{ $post->body }} </p>

				<p><a class="btn btn-primary" href="/posts/{{ $post->id }}" role="button">View details &raquo;</a></p>
			</div>

		@endforeach
	</div>

	{{ $posts->links() }}
</body>
</html>