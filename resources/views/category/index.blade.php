@extends('layouts.app')
@section('content')
<style>
	.mb-3{
		float: left;
		
		
		
	}
	.btncreate {
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
		background-color: #21574a;
		color: #fff;
		font-weight: 300;
		text-decoration: none;
		border-radius: 5px;
		border: 1px solid #21574a;
		float: left;
		padding: 5px 10px 5px 10px;
	}
	.btnshow{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
		background-color: #21574a ;
		color: #fff;
		text-decoration: none;
		font-weight: 300;
		border: 1px solid #21574a ;
		float: right;
		padding: 5px 10px 5px 10px;
		border-radius: 5px;
	
	}
	.btnedit{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
		background-color: #628272;
		color: #fff;
		font-weight: 300;
		text-decoration: none;
		border: 1px solid #628272;
		float: right;
		padding: 5px 10px 5px 10px;
		border-radius: 5px;
	}
	.btnshow:hover{
		background-color: #628272;
		border: 1px solid #628272;

	}
	.btnedit:hover{
		background-color: #9ca18d;
		border: 1px solid #9ca18d;

	}
	.btndel{
		box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
		background-color: #DC3545;
		color: #fff;
		font-weight: 300;
		text-decoration: none;
		border: 1px solid #DC3545;
		float: right;
		padding: 5px 10px 5px 10px;
		border-radius: 5px;
	}
	.table {
		
		float: left;
		margin-top: 20px;
		background-color: #fff;
	}
	td{
		font-weight: 500;
		
	
	}
	</style>
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('category.create') }}" class="btncreate btn-success">Create new category</a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Action</th>
				
			</tr>
		</thead>
		<tbody>
			@forelse ($categories as $category)
				<tr>
					<th scope="row">{{ $loop->index + 1 }}</th>
					<td>{{ $category->title }}</td>
					<td>
						<a href="{{ route('category.show', $category->id) }}" class="btnshow btn-primary m-1">Show</a>
						<a href="{{ route('category.edit', $category->id) }}" class="btnedit btn-primary m-1">Edit</a>
						<a href="#" class="btndel btn-danger m-1" onclick="document.getElementById('delete-category-{{ $category->id }}').submit();">Delete</a>
						<form method="post" action="{{ route('category.destroy', $category->id) }}" id="delete-category-{{ $category->id }}" style="display: none;">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="4" class="text-center">No categories found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection