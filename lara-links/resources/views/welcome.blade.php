@extends ('layouts.app')

@section ('content')
	<ul>
		@foreach ($links as $link)
			<li>{{ $link->title }}</li>
		@endforeach
	</ul>
@stop
