@extends('layouts.app')
@section('content')
<style>
	.btnback{	
		margin-top:10px;
	box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
    background-color: #21574a;
    color: #fff;
    font-weight: 300;
	text-decoration: none;
	border-radius: 5px;
    border: 1px solid #21574a;
    float: left;
    padding: 5px 20px 5px 20px;
	}
	.btnback:hover{
		background-color: #628272;
		border: 1px solid #628272;
		color: #fff;
		font-weight: 300;
	}
	input{
		margin-top:10px;
	box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
    background-color: #21574a;
    color: #fff;
    font-weight: 300;
	text-decoration: none;
	border-radius: 5px;
    border: 1px solid #21574a;
    float: left;
    padding: 5px 20px 5px 20px;
	}
</style>
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
		<a href="{{ route('category.index') }}" class="btnback btn-warning">Back</a>
	</form>
</div>
@endsection