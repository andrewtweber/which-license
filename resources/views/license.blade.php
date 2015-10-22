@extends('layout', ['title' => $license->name])

@section('content')

<p>
	<a href="/" class="btn btn-info"><span class="fa fa-undo"></span> Start over</a>
</p>

<div class="panel panel-default">

	<div class="panel-heading">
		<h1>{{ $license->name }}</h1>
	</div>

	<div class="panel-body">

		<textarea class="form-control license-content" cols="80" rows="20">{{ $license->content }}</textarea>

	</div>
</div>

@stop
