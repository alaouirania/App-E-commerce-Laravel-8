@extends('layouts.app')
@section('content')
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('category.create') }}" class="btn btn-success">Create new category</a>
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
						<a href="{{ route('category.show', $category->id) }}" class="btn btn-primary m-1">Show</a>
						<a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary m-1">Edit</a>
						<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete-category-{{ $category->id }}').submit();">Delete</a>
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