@extends('layouts.app')
@section('content')
<div class="row m-3">
	<div class="mb-3">
		<a href="{{ route('profile.create') }}" class="btn btn-success">Create new post</a>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Image</th>
				<th scope="col">Action</th>
				

			</tr>
		</thead>
		<tbody>
			@forelse ($posts as $post)
				<tr>
					<th scope="row">{{ $loop->index + 1 }}</th>
					<td>{{ $post->title }}</td>
					<td><image src="{{asset('images')}}" /></td>
					<td>
						<a href="{{ route('profile.show', $post->id) }}" class="btn btn-primary m-1">Show</a>
						<a href="{{ route('profile.edit', $post->id) }}" class="btn btn-primary m-1">Edit</a>
						<a href="#" class="btn btn-danger m-1" onclick="document.getElementById('delete-post-{{ $post->id }}').submit();">Delete</a>
						<form method="post" action="{{ route('profile.destroy', $post->id) }}" id="delete-post-{{ $post->id }}" style="display: none;">
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