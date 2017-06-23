@extends ('layouts.master')

@section ('content')
	
	<div class="row">
		<div class="col-md-4">
			<div class="title">
				<h2>{{ $post->title }}</h2>
				Company: {{ $post->company_name }}
			</div>

			<hr>

			<div class="body">
				<p>
					{{ $post->body }}
				</p>
			</div>

			<div class="info">
				<hr>
				
				Telephone: {{ $post->company_phone_number }}
			
				Email: {{ $post->company_email }}
			</div>

			

		</div>
	</div>
	

@endsection