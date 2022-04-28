@extends('layouts.app')
@section('content')
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Title: {{ $category->title }}</li>
		</ul>
	</div>
	<div class="mt-3">
		<a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
	</div>
</div>
@endsection