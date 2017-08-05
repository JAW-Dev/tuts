@extends ('layouts.app')

@section ('content')
	<div class="container">
		<div class="row">
			<h1>Submit a Link</h1>
			<form action="/submit" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="Title">
				</div>
				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="URL">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="description" class="form-control" name="description"></textarea>
				</div>
				<button tryp="submit" class="btn btn-default">Submit</button>
				@if ( count( $errors ) )
					<div class="form-group">
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif
			</form>
		</div>
	</div>
@stop
