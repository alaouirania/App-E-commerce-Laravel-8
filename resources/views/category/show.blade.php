@extends('layouts.app')
@section('content')
<style>
	.btnback{	
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
</style>
<div class="row">
	<div class="my-3">
		<ul class="list-group">
			<li class="list-group-item">Title: {{ $category->title }}</li>
		</ul>
	</div>
	<div class="mt-3">
		<a href="{{ route('category.index') }}" class="btnback btn-warning">Back</a>
	</div>
</div>
@endsection