@extends('layouts.app')
@section('content')
<div class="row m-3">
	<form method="post" action="{{ route('category.update', $category->id) }}">
		@csrf
		@method('PATCH')
		<div class="mb-3">
			<label class="form-label" for="title">Title</label>
			<input type="text" name="title" value="{{ $category->title }}" class="form-control">
			@error('title')
				<div class="alert alert-danger">{{ $message }}</div>
			@enderror
		</div>

		<input type="submit" class="btn btn-success">
		<a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
	</form>
</div>
@endsection