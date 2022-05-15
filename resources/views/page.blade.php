@extends('layouts.app')
@section('content')
<div class="row m-3">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Descipription</th>
                <th scope="col">Price</th>
				<th scope="col">Category</th>
				<th scope="col">Image</th>
				<th scope="col">Location</th>
                <th scope="col">State</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->description }}</td>
                    <td>{{ $post->price }}</td>
					<td>{{ $post->category }}</td>
					<td>{{ $post->image }}</td>
					<td>{{ $post->location }}</td>
					<td>{{ $post->state }}</td>

                  
				</tr>
			@empty
			    <tr>
			    	<td colspan="4" class="text-center">No posts found.</td>
			    </tr>
			@endforelse
		</tbody>
	</table>
</div>
@endsection