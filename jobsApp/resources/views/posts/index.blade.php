@extends ('layouts.master')
@section ('content')


	@foreach ($posts as $post)

		<div class="col-md-4">

			<h2> {{ $post->title }} </h2>

			<p> {{ $post->body }} </p>

			<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
		</div>

	@endforeach
@endsection