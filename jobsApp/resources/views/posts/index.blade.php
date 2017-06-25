@extends ('layouts.master')
@section ('content')

	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
        <h2>Dashboard</h2>
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

@endsection