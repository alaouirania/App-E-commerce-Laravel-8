@extends('layouts.app')
@section('content')
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('posts.create') }}" class="btn btn-success">Create new post</a>
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
			@forelse ($data as $key)
				<tr>
					<th scope="row">{{ $loop->index + 1 }}</th>
					<td>{{ $key->title }}</td>
					<td>
						<a href="{{ route('posts.show', $key->id) }}" class="btn btn-primary m-1">Show</a>
						<a href="{{ route('posts.edit', $key->id) }}" class="btn btn-primary m-1">Edit</a>
						<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete-post-{{ $key->id }}').submit();">Delete</a>
                        <a href="#" class="btn btn-primary m-1">Confirm</a>
						<form method="post" action="{{ route('posts.destroy', $key->id) }}" id="delete-post-{{ $key->id }}" style="display: none;">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
			@empty
			    <tr>
			    	<td colspan="4" class="text-center">No post found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection