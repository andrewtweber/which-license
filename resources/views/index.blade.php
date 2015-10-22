@extends('layout')

@section('content')

<div class="panel panel-default">
	<div class="panel-body text-center">

		<div id="step-1" data-question="control">
			<p>
				Do you want to control usage and distribution?
			</p>
		</div>

		<div id="step-2" style="display:none" data-question="closed" data-path="1">
			<p>
				Can non-open source programs use your code?
			</p>
		</div>

		<div id="step-3" style="display:none" data-question="royalties" data-path="1">
			<p>
				Do they have to pay you royalties?
			</p>
		</div>

		<div id="step-4" style="display:none" data-question="reciprocity" data-path="0">
			<p>
				Do they have to acknowledge your work?
			</p>
		</div>

		<div id="result" style="display:none">
			<p>
				You should use
			</p>
		</div>

		<div class="buttons">
			<a class="btn btn-lg btn-success" data-path="1">Yes</a>
		    <a class="btn btn-lg btn-danger" data-path="0">No</a>
		</div>

@foreach ($licenses as $license)
		<div class="license" style="display:none" data-control="{{ $license->control }}" data-closed="{{ $license->closed }}" data-royalties="{{ $license->royalties }}" data-reciprocity="{{ $license->reciprocity }}">
			<h2><a href="{{ $license->url }}">{{ $license->name }}</a></h2>
		</div>
@endforeach

	</div>
</div>

@stop
