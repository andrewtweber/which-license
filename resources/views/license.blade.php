@extends('layout', ['title' => $license->name])

@section('content')

<div class="panel panel-default">

	<div class="panel-heading">
		{{ $license->name }}
	</div>

	<div class="panel-body">

		<div class="row">
			<div class="col-md-8">
				<textarea class="form-control license-content" rows="20">{{ $license->content }}</textarea>
			</div>
		</div>

	</div>
</div>

@stop
